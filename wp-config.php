<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'inmnghost_vex_d2' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'inmnghost_vex_d2' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'f1Kh%7Sl' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M#sItxWALe)=Y!e$$?atiP/2=V_]dqCk5T%1*GQ~@P-=H).Ak=+LF_QuKGeHGXdK' );
define( 'SECURE_AUTH_KEY',  'i4AqUc-&hB,8`}0;#EF!33hWDTvDSk]W;/(,}.Tdb4TY~2Dn91( :~0AfX9wGPzb' );
define( 'LOGGED_IN_KEY',    'jh0xJ`;Z.V:IV0<gde3rM/YDaqJLE[2WF.xn,|ZmPRvs8_Z[Ac-}e!AK 7/N;v)K' );
define( 'NONCE_KEY',        '[-Zk2]w8{KF!qS9=rR$/%ilfOGvRr.=<psi&dcd45C;AYH,eX-zwBCR81/y,Wjk!' );
define( 'AUTH_SALT',        '4FfK^VeA&c}[rg$^M>3m/s8CDUJ^c@WV{mY>GF]AF#}1 PuiKxj+dss=CX_QMK]x' );
define( 'SECURE_AUTH_SALT', 'UKQz;v5E7}-yi%FoG^VpX,!_Ha%J/+7c3:318u0<C8llhlW1P~OFJL^HQy<zsS!1' );
define( 'LOGGED_IN_SALT',   ' d4yA8Jb0BTM!<wf}d@.RuJ#uT9ur0yVSLTPVUf#1t4oEfj-vw#G&LqYB?c3/mA@' );
define( 'NONCE_SALT',       'Aep5>VFe;p_k#2! r2+.R;U`YiVl]p`_%[Xc-mPAr)L`%jqg{kk&V&OJgXSz[3E&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
