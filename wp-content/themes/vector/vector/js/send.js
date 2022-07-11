$( document ).ready(function() {
	
    $("#sender-form1").submit(function(e){
		e.preventDefault();
		console.log('123');
		let regex = /^(\+7)?[\s]?\(?[0-9]{3}\)?[\s]?[0-9]{3}[\s]?[0-9]{4}$/;
		let phone = $("#form-phone1").val();
 		if(!regex.test(phone)){
 			$("#sender-form1").addClass('js-error-control-box');
		} else {
			$("#sender-form1").removeClass('js-error-control-box');
			sendMsg(1);
		}
    });

    $("#sender-form2").submit(function(e){
        sendMsg(2);
        e.preventDefault();
    });

    function sendMsg(formid) {
        $("#sender-form" + formid + " .button").val("ожидайте");
        $("#sender-form" + formid + " .button").prop('disabled', true);
        $("#sender-form" + formid + " .button").addClass("button-disabled");
        var name = $("#form-name" + formid + "").val();
        var email = $("#form-phone" + formid + "").val();
        var form_data = [
            {name: 'name', value: name},
            {name: 'phone', value: email},
        ];
        $.ajax({
            url: '/sender.php',
            type: 'POST',
            data: form_data,
            success : function (data) {
                if(data=="ok") {
					$("#sender-form" + formid).hide();
					$("#sender-form" + formid + "-success").show();
                    $(".answer-form-success").slideDown(1000);
                    setTimeout(function () {
                        $(".answer-form-success").slideUp(2000);
                    },3000)
                } else {
                    $(".answer-form-error").slideDown(1000);
                    setTimeout(function () {
                        $(".answer-form-error").slideUp(2000);
                    },10000)
                }
                $("#sender-form" + formid + " .button").removeClass("button-disabled");
                $("#sender-form" + formid + " .button").val("Получить консультацию");
                $("#sender-form" + formid + " .button").prop('disabled', false);
                $("#form-name" + formid + "").val("");
                $("#form-phone" + formid + "").val("");
            }
        });
    }
});