<?php
/**
 * Easy Digital Downloads class.
 *
 * @since 2.6.13
 *
 * @package OMAPI
 * @author  Thomas Griffin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Easy Digital Downloads class.
 *
 * @since 2.6.13
 */
class OMAPI_EasyDigitalDownloads {
	/**
	 * Holds the class object.
	 *
	 * @since 2.6.13
	 *
	 * @var object
	 */
	public static $instance;

	/**
	 * Path to the file.
	 *
	 * @since 2.6.13
	 *
	 * @var string
	 */
	public $file = __FILE__;

	/**
	 * Holds the base class object.
	 *
	 * @since 2.6.13
	 *
	 * @var object
	 */
	public $base;

	/**
	 * Primary class constructor.
	 *
	 * @since 2.6.13
	 */
	public function __construct() {
		// Set our object.
		$this->set();

		// Revenue attribution support. We load on shutdown because we need access
		// to the $_COOKIE data, which will not be available for any action triggered
		// by cron. This attempts at the last possible moment to avoid interfering
		// with anything else happening with the payment.
		add_action( 'shutdown', array( $this, 'maybe_store_revenue_attribution' ) );
		add_action( 'edd_update_payment_status', array( $this, 'maybe_store_revenue_attribution_on_payment_status_update' ), 10, 2 );
	}

	/**
	 * Sets our object instance and base class instance.
	 *
	 * @since 2.6.13
	 */
	public function set() {
		self::$instance = $this;
		$this->base     = OMAPI::get_instance();
	}

	/**
	 * Maybe stores revenue attribution data when a purchase is successful.
	 *
	 * @since 2.6.13
	 *
	 * @param int  $payment_id The EDD payment ID.
	 * @param bool $force      Flag to force sending the revenue attribution data.
	 *
	 * @return void
	 */
	public function maybe_store_revenue_attribution( $payment_id = 0, $force = false ) {
		if ( ! class_exists( 'EDD_Payment' ) ) {
			return;
		}

		// If we don't have a payment ID passed, try to grab one.
		if ( ! $payment_id ) {
			// If we don't have the right EDD function to grab session data, return early.
			if ( ! function_exists( 'edd_get_purchase_session' ) ) {
				return;
			}

			// If we are not on the success page, return early.
			if ( function_exists( 'edd_is_success_page' ) && ! edd_is_success_page() ) {
				return;
			}

			// Grab the purchase session. If we can't find it, return early.
			$session = edd_get_purchase_session();
			if ( empty( $session['purchase_key'] ) ) {
				return;
			}

			// Grab the payment ID from the purchase session. If we can't find
			// it, return early.
			$payment_id = edd_get_purchase_id_by_key( $session['purchase_key'] );
			if ( ! $payment_id ) {
				return;
			}
		}

		// If we have already stored revenue attribution data before, return early.
		$stored = get_post_meta( $payment_id, '_om_revenue_attribution_complete', true );
		if ( $stored ) {
			return;
		}

		// Grab the payment. If we can't, return early.
		$payment = new EDD_Payment( $payment_id );
		if ( ! $payment ) {
			return;
		}

		// Grab some necessary data to send.
		$data_on_payment = get_post_meta( $payment_id, '_om_revenue_attribution_data', true );
		$data            = wp_parse_args(
			array(
				'transaction_id' => absint( $payment_id ),
				'value'          => esc_html( $payment->total ),
				'test'           => 'live' !== $payment->mode,
			),
			! empty( $data_on_payment ) ? $data_on_payment : $this->base->revenue->get_revenue_data()
		);

		// If the status is not complete, return early.
		// This will happen for payments where further
		// work is required (such as checks, etc.). In those
		// instances, we need to store the data to be processed
		// at a later time.
		if (
			! in_array( $payment->status, array( 'complete', 'completed', 'publish' ), true )
			&& ! $force
		) {
			update_post_meta( $payment_id, '_om_revenue_attribution_data', $data );
			return;
		}

		// Attempt to make the revenue attribution request.
		// It checks to determine if campaigns are set, etc.
		$ret = $this->base->revenue->store( $data );
		if ( ! $ret || is_wp_error( $ret ) ) {
			return;
		}

		// Update the payment meta for storing revenue attribution data.
		update_post_meta( $payment_id, '_om_revenue_attribution_complete', time() );
	}

	/**
	 * Maybe stores revenue attribution data when a purchase is successful.
	 *
	 * @since 2.6.13
	 *
	 * @param int    $payment_id The EDD payment ID.
	 * @param string $new_status The new payment status.
	 * @param string $old_status The old payment status.
	 *
	 * @return void
	 */
	public function maybe_store_revenue_attribution_on_payment_status_update( $payment_id, $new_status ) {
		// If we don't have the proper new status, return early.
		if ( 'publish' !== $new_status && 'complete' !== $new_status && 'completed' !== $new_status ) {
			return;
		}

		// Maybe store the revenue attribution data.
		return $this->maybe_store_revenue_attribution( $payment_id, true );
	}
}
