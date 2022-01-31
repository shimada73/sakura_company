$("#recruitForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "* 必須項目を入力してください");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
	var age = $("#age").val();
	var phone = $("#phone").val();

    //var interest = [];
    //$('.get_value').each(function() {
    //    if($(this).is(":checked")){
    //        interest.push($(this).val());
    //    }
    //});

    //interest = interest.toString();

    // var interest = $("input[type=checkbox]:checked").val();
    // var interest = $("input[type=checkbox][name=interest]:checked").val();
    var interest = $("#interest").val();
    var experience = $("#experience").val();
    var freeentry = $("#freeentry").val();

    $.ajax({
        type: "POST",
        url: "php/recruit_process.php",
        data: "name=" + name + "&email=" + email + "&age=" + age + "&phone=" + phone + "&interest=" + interest + "&experience=" + experience + "&freeentry=" + freeentry,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#recruitForm")[0].reset();
    submitMSG(true, "送信完了しました。　記入いただいたアドレスに連絡いたします。")
    //grecaptcha.reset();
}

function formError(){
    $("#recruitForm").removeClass().addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}