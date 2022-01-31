function mail_set(){
	
	var name = document.mail_form.name.value;
	var mail = "test";
	var domain = "@sakura-communication.co.jp";
	
	//window.alert('起動確認。 ' + name );
	
	switch(name){
		case 'あ．安孫子　弘':
			mail = "hs-abiko"+domain;
			break;
			
		case 'あ．荒木　泰孝':
			mail = "yt-araki"+domain;
			break;
			
		case 'い．入澤　乙之':
			mail = "oy-irisawa"+domain;
			break;
			
		case 'う．薄田　直樹':
			mail = "nk-usuda"+domain;
			break;
			
		case 'お．翁　道茂':
			mail = "ms-okina"+domain;
			break;
			
		case 'お．小川　慈恵富':
			mail = "jf-ogawa"+domain;
			break;
			
		case 'く．桑村　時生':
			mail = "to-kuwamura"+domain;
			break;
			
		case 'ご．ゴン　セイ':
			mail = "sei-gon"+domain;
			break;
			
		case 'さ．齋官　潤':
			mail = "jn-saikan"+domain;
			break;
			
		case 'さ．佐藤　光樹':
			mail = "kk-sato"+domain;
			break;
			
		case 'し．清水　敏昭':
			mail = "ta-shimizu"+domain;
			break;
			
		case 'じ．ジニアス　ＡＳＭ':
			mail = "genius-asmd"+domain;
			break;
			
		case 'せ．瀬戸山　かおり':
			mail = "ko-setoyama"+domain;
			break;
			
		case 'た．立花　勇樹':
			mail = "yk-tachibana"+domain;
			break;
			
		case 'と．當間　康之':
			mail = "yy-toma"+domain;
			break;
			
		case 'な．中野　翔太':
			mail = "st-nakano"+domain;
			break;
			
		case 'な．中野　光教':
			mail = "mn-nakano"+domain;
			break;
			
		case 'ひ．廣瀬　尭栄':
			mail = "te-hirose"+domain;
			break;
			
		case 'や．山口　貴夫':
			mail = "to-yamaguchi"+domain;
			break;
			
		case 'や．山崎　真利':
			mail = "mt-yamazaki"+domain;
			break;
			
		case 'よ．姚　建凡':
			mail = "kh-you"+domain;
			break;
			
		default:
		    mail = "";
		    break;
	}
	//window.alert('起動確認。 ' + name +"  "+ mail );
	
	document.mail_form.email.value = mail;
	
	//window.alert(document.mail_form.email.value);
}