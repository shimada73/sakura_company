function mail_set(){
	
	var name = document.mail_form.name.value;
	var mail = "test";
	var domain = "@sakura-communication.co.jp";
	
	//window.alert('N®mFB ' + name );
	
	switch(name){
		case ' DÀ·q@O':
			mail = "hs-abiko"+domain;
			break;
			
		case ' DrØ@×F':
			mail = "yt-araki"+domain;
			break;
			
		case '¢DüàV@³V':
			mail = "oy-irisawa"+domain;
			break;
			
		case '¤Dc@¼÷':
			mail = "nk-usuda"+domain;
			break;
			
		case '¨D¥@¹Î':
			mail = "ms-okina"+domain;
			break;
			
		case '¨D¬ì@bx':
			mail = "jf-ogawa"+domain;
			break;
			
		case '­DKº@¶':
			mail = "to-kuwamura"+domain;
			break;
			
		case '²DS@ZC':
			mail = "sei-gon"+domain;
			break;
			
		case '³DâV¯@':
			mail = "jn-saikan"+domain;
			break;
			
		case '³D²¡@õ÷':
			mail = "kk-sato"+domain;
			break;
			
		case 'µD´@qº':
			mail = "ta-shimizu"+domain;
			break;
			
		case '¶DWjAX@`rl':
			mail = "genius-asmd"+domain;
			break;
			
		case '¹D£ËR@©¨è':
			mail = "ko-setoyama"+domain;
			break;
			
		case '½D§Ô@E÷':
			mail = "yk-tachibana"+domain;
			break;
			
		case 'ÆDácÔ@NV':
			mail = "yy-toma"+domain;
			break;
			
		case 'ÈDì@ãÄ¾':
			mail = "st-nakano"+domain;
			break;
			
		case 'ÈDì@õ³':
			mail = "mn-nakano"+domain;
			break;
			
		case 'ÐDA£@Äh':
			mail = "te-hirose"+domain;
			break;
			
		case 'âDRû@Mv':
			mail = "to-yamaguchi"+domain;
			break;
			
		case 'âDRè@^':
			mail = "mt-yamazaki"+domain;
			break;
			
		case 'æDL@}':
			mail = "kh-you"+domain;
			break;
			
		default:
		    mail = "";
		    break;
	}
	//window.alert('N®mFB ' + name +"  "+ mail );
	
	document.mail_form.email.value = mail;
	
	//window.alert(document.mail_form.email.value);
}