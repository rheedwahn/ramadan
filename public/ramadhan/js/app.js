$(document).ready(function() {

    function loader(v){
        if(v === "on"){
            $("#reg_form").css({
                opacity : 0.2
            });
            $("#loader").show();
        }else{
            $("#reg_form").css({
                opacity : 1
            });
            $("#loader").hide();
        }
    }

    function loader_login(l){
        if(l === "on"){
            $("#form_login").css({
                opacity: 0.2
            });
            $("#loader").show();
        }else{
            $("#form_login").css({
                opacity: 1
            });
            $("#loader").hide();
        }
    }

    $("#submit").click(function() {

        var url = $("#reg_form").attr('action');
        loader('on');
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: $("#reg_form").serialize(),
            success: function(data)
            {
                if($.isEmptyObject(data.error)){

                    if(data.success === "Success"){
                        loader('off');
                        sweetAlert("Success...", "Thank you for registering with us", "success");
                        $('#reg_form')[0].reset();
                    }

                }else{
                    loader('off');
                    printErrorMsg(data.error);

                }
            }
            
        });
        
    });
    function printErrorMsg (msg) {

        $(".print-error-msg").find("ul").html('');

        $(".print-error-msg").css('display','block');

        $(".print-error-msg").fadeOut(5000);

        $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

        });

	}

    function redirectIflogin(url_dashboard)
    {
        window.location = url_dashboard;
    }

    $("#login").click(function() {
        var url_login = $("#form_login").attr('action');
        var login_form = $("#form_login").serializeArray();
        loader_login('on');
        $.post(url_login, login_form, function(data) {
            if(data === "fail"){
                loader_login('off');
                sweetAlert("Error...", "Invalid login credentials!", "error");
                $("#form_login")[0].reset();
            }else{
                loader_login('off');
                $("#log").addClass('alert alert-success').fadeIn(3000, function() {
                    $(this).hide();
                });
                $("#msg").text('Logged in successfully....,redirecting...');
                redirectIflogin('/');
            }
            
        });

    });

});

