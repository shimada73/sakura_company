function mail_set(){
	
	var name = document.mail_form.name.value;
	var mail = "test";
	var domain = "@sakura-communication.co.jp";
	
	//window.alert('�N���m�F�B ' + name );
	
	switch(name){
		case '���D�����q�@�O':
			mail = "hs-abiko"+domain;
			break;
			
		case '���D�r�؁@�׍F':
			mail = "yt-araki"+domain;
			break;
			
		case '���D���V�@���V':
			mail = "oy-irisawa"+domain;
			break;
			
		case '���D���c�@����':
			mail = "nk-usuda"+domain;
			break;
			
		case '���D���@����':
			mail = "ms-okina"+domain;
			break;
			
		case '���D����@���b�x':
			mail = "jf-ogawa"+domain;
			break;
			
		case '���D�K���@����':
			mail = "to-kuwamura"+domain;
			break;
			
		case '���D�S���@�Z�C':
			mail = "sei-gon"+domain;
			break;
			
		case '���D�V���@��':
			mail = "jn-saikan"+domain;
			break;
			
		case '���D�����@����':
			mail = "kk-sato"+domain;
			break;
			
		case '���D�����@�q��':
			mail = "ta-shimizu"+domain;
			break;
			
		case '���D�W�j�A�X�@�`�r�l':
			mail = "genius-asmd"+domain;
			break;
			
		case '���D���ˎR�@������':
			mail = "ko-setoyama"+domain;
			break;
			
		case '���D���ԁ@�E��':
			mail = "yk-tachibana"+domain;
			break;
			
		case '�ƁD�c�ԁ@�N�V':
			mail = "yy-toma"+domain;
			break;
			
		case '�ȁD����@�đ�':
			mail = "st-nakano"+domain;
			break;
			
		case '�ȁD����@����':
			mail = "mn-nakano"+domain;
			break;
			
		case '�ЁD�A���@�ĉh':
			mail = "te-hirose"+domain;
			break;
			
		case '��D�R���@�M�v':
			mail = "to-yamaguchi"+domain;
			break;
			
		case '��D�R��@�^��':
			mail = "mt-yamazaki"+domain;
			break;
			
		case '��D�L�@���}':
			mail = "kh-you"+domain;
			break;
			
		default:
		    mail = "";
		    break;
	}
	//window.alert('�N���m�F�B ' + name +"  "+ mail );
	
	document.mail_form.email.value = mail;
	
	//window.alert(document.mail_form.email.value);
}