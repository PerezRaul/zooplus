
/* bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
*/


/* Carga la raza dependiendo del tipo de mascota que hayas elegido en el formulario de buscar */

function cargarRaza(){
	$('#raza').html('<option selected>Cargando</option>');
 
 	var idTipus= $('#tipo_animal').val();
 
	var toLoad= 'rellenarRaza.php?tipo_animal='+idTipus;
	
	$.post(toLoad,function (responseText){
 
		$('#raza').html(responseText);
 
	});
}


/* Carga la raza dependiendo del tipo de mascota que hayas elegido en el formulario de insertar anuncios */

function cargarRaza2(){
	$('#raza2').html('<option selected>Cargando</option>');
 
 	var idTipus= $('#tipo_animal2').val();
 
	var toLoad= 'rellenarRaza.php?tipo_animal2='+idTipus;
	
	$.post(toLoad,function (responseText){
 
		$('#raza2').html(responseText);
 
	});
}


