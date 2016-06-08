$(function() {

    var menu_ul = $('.menu > li > ul'),
        menu_a  = $('.menu > li > a');
    
    menu_ul.hide();

    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
        }
    });

});

function validateForm() {
	txt = "";
	
    if(document.forms["contact_form"]["ciclo"].value < 0){
		alert("- El numero ingresado para probar el ciclo debe ser mayor que cero");
		return false;
	}
	
	ciclo = "";
	for(i = 1; i <= document.forms["contact_form"]["ciclo"].value; i++){
		ciclo += "\n - VUELTA #"+i;
	}
	
	alert(ciclo)
	
	var r = confirm("Confirme el envio de este formulario! \n NOMBRE: "+document.forms["contact_form"]["nomb"].value+"\n EMAIL: "+document.forms["contact_form"]["email"].value+"\n TELEFONO: "+document.forms["contact_form"]["telef"].value+"\n FECHA DE NACIMIENTO: "+document.forms["contact_form"]["date"].value);

	if (r == true) {
	    alert("Formulario enviado correctamente!");
	    return false;
	} else {
	    alert("Usted ha cancelado el envio del formulario!");
	    return false;
	}
}

function mostrar_virtual(){
	document.getElementById('VIRTUAL').style.display = 'block';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_trasla(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'block';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_monit(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'block';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_respal(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'block';
}
