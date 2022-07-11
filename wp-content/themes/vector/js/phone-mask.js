jQuery.fn.phone_mask = function (params) {
    function isInteger(num) {
        return (num ^ 0) === num;
    }
    if(!params) params = {};
    if(!params.mask_error_text) params.mask_error_text = 'Enter the phone number in the correct format!';
    var masks = [{
        mask: '+7 (xxx) xxx xxxx',
        label: '+7 (',
        img: '/flags/ru.png',
        pattern: '\\+7 \\([0-9]{3}\\) [0-9]{3} [0-9]{4}'
    },{
        mask: '+7 (xxx) xxx xx xx',
        label: '+7 (',
        img: '/flags/ru.png',
        pattern: '\\+7 \\([0-9]{3}\\) [0-9]{3} [0-9]{2} [0-9]{2}'
    },];
    var $field = this;
    $field.click(function(e) {
        var x = e.offsetX === undefined ? e.layerX:e.offsetX;
        var y = e.offsetY === undefined ? e.layerY:e.offsetY;

        if(x < 30) jQuery(this).autocomplete( "search", "" );

        this.setSelectionRange(this.value.length,this.value.length);
    });
    this.on('input', function (e) {
        var $this = jQuery(this),
            val = $this.val().replace(/-/g, ' '),
            char = val[val.length - 1] ? val[val.length - 1] : '',
            correct_val = $this.data('val') ? $this.data('val') : '';
        $this.siblings('.phone_mask_error').hide();
        if(correct_val.length >= val.length) {
            correct_val = '';
        }
        if(isInteger(+char) || char === ' ' || char === '(' || char === ')' || char === '+') {
            var searched_mask = false;
            masks.every(function (item) {
                var correct = true,
                    local_correct_val = correct_val;
                for (var i = 0; i < val.length; i++) {
                    if(item.mask[i] === val[i]) {
                        if(local_correct_val.length > i) local_correct_val[i] = val[i];
                        else local_correct_val += val[i];
                    }
                    else if(item.mask[i] === 'x' && jQuery.isNumeric(val[i])) {
                        if(local_correct_val.length > i) local_correct_val[i] = val[i];
                        else local_correct_val += val[i];
                    }
                    else if(item.mask[i] === ' ' || item.mask[i] === '(' || item.mask[i] === ')' || item.mask[i] === '+') {
                        if(local_correct_val.length > i) local_correct_val[i] = item.mask[i];
                        else local_correct_val += item.mask[i];
                        val = val.substr(0, i) + item.mask[i] + val.substr(i);
                    }
                    else if (val[i] !== item.mask[i]) {
                        correct = false;
                        break;
                    }
                }
                if (correct && val.length <= item.mask.length) {
                    searched_mask = item;
                    return false;
                }
                return true;
            });
        }
        if(searched_mask && searched_mask.mask) {
            correct_val = val;
            /*$this.css({
                backgroundImage: 'url('+searched_mask.img+')'
            });*/
            $this.data('searched_mask', searched_mask.mask);
            if($this.attr('type') == 'tel') {
                $this.attr('pattern', searched_mask.pattern);
                $this.attr('title', searched_mask.mask);
            }
        } else $this.removeAttr('pattern');
        if(!searched_mask && !$this.attr('completed')) $this.siblings('.phone_mask_error').show();
        if($this.val() && $this.data('searched_mask').length === correct_val.length) $this.attr('completed', 'completed');
        else $this.removeAttr('completed');
        $this.val(correct_val);
        $this.data('val', correct_val);
        /*return false;*/
    });
    this.each(function () {
        var $phone_input = jQuery(this),
            required = jQuery(this).attr('required');
        if (typeof required !== typeof undefined && required !== false) {
            jQuery(this).closest('form').submit(function () {
                if(!$phone_input.attr('completed')) {
                    $phone_input.focus();
                    /*
                    if(!$phone_input.siblings('.phone_mask_error').length && $phone_input.val()) {
                        $phone_input.after('<span class="phone_mask_error">'+params.mask_error_text+'</span>');
                    }
                    else if($phone_input.val()) $phone_input.siblings('.phone_mask_error').show();
                    */
                    return false;
                }
            });
        }
    });
    this.addClass('phone_input_init').trigger('input').change();
    /*this.val('+').data('val', '+')*/
};