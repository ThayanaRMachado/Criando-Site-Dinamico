$(function(){//Aqui vai todo o código Javascript
	//Esta tag vem do style.css
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');
		//Abrir menu através do fadeIn()
		/*if (listaMenu.is(':hidden') == true) 
			listaMenu.fadeIn();//O menu aparece completo.
		else
			listaMenu.fadeOut();//O menu desaparece.*/

		//Abrir ou fechar o menu
		listaMenu.slideToggle(); //Melhor opção


		//Abrir ou fechar sem efeitos
		/*if (listaMenu.is(':hidden') == true) {}
			listaMenu.show();//O menu aparece completo.
		else
			listaMenu.hide();//O menu desaparece.*/

		//4ª Opção
		/*if (listaMenu.is(':hidden') == true)
			listaMenu.css('display', 'block');
		else
			listaMenu.css('displat', 'none');*/
	})
})