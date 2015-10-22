<?php

/* 
	bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom

*/

function mostrarDatos(){

	$conexion = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

	$fTipoAnimal	=	$_REQUEST['tipo_animal'];

	$fRaza			= 	$_REQUEST['raza'];

	$fMunicipio		= 	$_REQUEST['municipio'];

	if($fTipoAnimal==0){
		$sql = "SELECT anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_adre, contact_nom, contact_telf, municipi_nom, raca_nom, tipus_anim_nom 
				FROM tbl_anunci 
				INNER JOIN tbl_contacte on tbl_anunci.contact_id=tbl_contacte.contact_id 
				INNER JOIN tbl_municipi on tbl_anunci.mun_id=tbl_municipi.municipi_id 
				INNER JOIN tbl_raca on tbl_anunci.raca_id=tbl_raca.raca_id 
				INNER JOIN tbl_tipus_animal on tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id
				";
			}else{

		$sql = "SELECT anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_adre, contact_nom, contact_telf, municipi_nom, raca_nom, tipus_anim_nom 
				FROM tbl_anunci 
				INNER JOIN tbl_contacte on tbl_anunci.contact_id=tbl_contacte.contact_id 
				INNER JOIN tbl_municipi on tbl_anunci.mun_id=tbl_municipi.municipi_id 
				INNER JOIN tbl_raca on tbl_anunci.raca_id=tbl_raca.raca_id 
				INNER JOIN tbl_tipus_animal on tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id
				WHERE tbl_anunci.tipus_anim_id =".$fTipoAnimal;
			}
	

		$qDatos = mysqli_query($con,$sql);
		
		while ($mostrarqDatos = mysqli_fetch_array($datos) {
			echo $mostrarqDatos;
		}
		
}
	

?>