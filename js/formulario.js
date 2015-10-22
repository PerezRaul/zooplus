
/* bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
    

function validar(op){
	if(op>0){
		sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id WHERE tbl_tipus_animal.tipus_anim_id ="+op;
		alert(op);
	}else{
		sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id";
	}	
}*/

/*function validar(op){
	/*switch(op){
		case '1': sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id WHERE tbl_tipus_animal.tipus_anim_id = 1;";
			rellenarRaza();
			break;
		case '2': sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id WHERE tbl_tipus_animal.tipus_anim_id = 2;";
			break;
		case '3': sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id WHERE tbl_tipus_animal.tipus_anim_id = 3;";
			break;
		case '4': sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id WHERE tbl_tipus_animal.tipus_anim_id = 4;";
			break;
		default: sql = "SELECT raca_id, raca_nom FROM tbl_raca INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id";
	}

}*/

function cargarRaza(){
	$('#raza').html('<option selected>Cargando</option>');
 
 	var idTipus= $('#tipo_animal').val();
 
	var toLoad= 'rellenarRaza.php?tipo_animal='+idTipus;
	
	$.post(toLoad,function (responseText){
 
		$('#raza').html(responseText);
 
	});
 
}


