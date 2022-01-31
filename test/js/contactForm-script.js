<?php
 $secretKey =  '6Lf4PQgdAAAAAClN-qTQCm5MXtqfFxLLrFjUfkV2';
 $captchaResponse = $_POST['g-recaptcha-response'];
 
 // APIリクエスト
 $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");
 
 // APIレスポンス確認
 $responseData = json_decode($verifyResponse);
 if ($responseData->success) {
   echo '<h1 class="text-center"><span class="no_wrap">ありがとうございました。</span></h1>'; // 成功（ロボットではない）
   //if (mail($to,"題名をこちらへ入力", $message, $headers)) {
   //   echo '<h1 class="text-center"><span class="no_wrap">ありがとうございました。</span></h1>';
   //}
 } else {
  echo '<h1 class="text-center">Sorry unexpected error occurred, please try again later.</h1>'; // 失敗
 }
?>

$("#contactForm").validator().on("submit", function (event) {
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
	var company = $("#company").val();
	var address = $("#address").val();
	var phone = $("#phone").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "php/contact_process.php",
        data: "name=" + name + "&email=" + email + "&company=" + company + "&address=" + address + "&phone=" + phone + "&message=" + message,
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
    $("#contactForm")[0].reset();
    submitMSG(true, "送信完了しました。　記入いただいたアドレスに連絡いたします。");
}

function formError(){
    $("#contactForm").removeClass().addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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