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

	//comprobamos si están istanciadas
	if(!isset($_REQUEST['tipo_animal'])){
		$fTipoAnimal=0;
	}else{

		$fTipoAnimal	=	$_REQUEST['tipo_animal'];
	}

	if(!isset($_REQUEST['raza'])){
		$fRaza=0;
	}else{
		$fRaza			= 	$_REQUEST['raza'];
	}

	if(!isset($_REQUEST['municipio'])){
		$fMunicipio=0;
	}else{
		$fMunicipio		= 	$_REQUEST['municipio'];
	}

	if($fTipoAnimal==0){
		$sql = "SELECT anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_adre, contact_nom, contact_telf, municipi_nom, raca_nom, tipus_anim_nom 
				FROM tbl_anunci 
				INNER JOIN tbl_contacte on tbl_anunci.contact_id=tbl_contacte.contact_id 
				INNER JOIN tbl_municipi on tbl_anunci.mun_id=tbl_municipi.municipi_id 
				INNER JOIN tbl_raca on tbl_anunci.raca_id=tbl_raca.raca_id 
				INNER JOIN tbl_tipus_animal on tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id
				ORDER BY tbl_anunci.anu_data DESC";
			}else{
		$sql = "SELECT anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_adre, contact_nom, contact_telf, municipi_nom, raca_nom, tipus_anim_nom 
				FROM tbl_anunci 
				INNER JOIN tbl_contacte on tbl_anunci.contact_id=tbl_contacte.contact_id 
				INNER JOIN tbl_municipi on tbl_anunci.mun_id=tbl_municipi.municipi_id 
				INNER JOIN tbl_raca on tbl_anunci.raca_id=tbl_raca.raca_id 
				INNER JOIN tbl_tipus_animal on tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id
				WHERE tbl_anunci.tipus_anim_id = $fTipoAnimal 1 ORDER BY tbl_anunci.anu_data DESC";
			}
	

		$qDatos = mysqli_query($conexion,$sql);
		
		while ($mostrarqDatos = mysqli_fetch_array($qDatos)) {
			echo "$mostrarqDatos[anu_data]<br/>";
			echo "$mostrarqDatos[anu_nom]<br/>";
			echo "$mostrarqDatos[anu_contingut]<br/>";
			echo "$mostrarqDatos[anu_tipus]<br/>";
			echo "$mostrarqDatos[anu_tipus]<br/>";
			echo "$mostrarqDatos[anu_tipus]<br/>";
			echo "$mostrarqDatos[anu_tipus]<br/>";
			echo "$mostrarqDatos[anu_tipus]<br/>";
		}
		
}
	

?>