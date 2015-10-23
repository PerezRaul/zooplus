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

	//conexión a bd
	$conexion = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

	//comprobar si las variables vienen sin setear
	if(!isset($_REQUEST['tipo_animal'])){
		$fTipoAnimal='null';
	}else{

		$fTipoAnimal	=	$_REQUEST['tipo_animal'];
	}

	if(!isset($_REQUEST['raza'])){
		$fRaza='null';
	}else{
		$fRaza			= 	$_REQUEST['raza'];
	}

	if(!isset($_REQUEST['municipio'])){
		$fMunicipio='null';
	}else{
		$fMunicipio		= 	$_REQUEST['municipio'];
	}

	//consulta total enlazada
	$sql = "SELECT anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_adre, contact_nom, contact_telf, municipi_nom, raca_nom, tipus_anim_nom 
			FROM tbl_anunci 
				INNER JOIN tbl_contacte on tbl_anunci.contact_id=tbl_contacte.contact_id 
				INNER JOIN tbl_municipi on tbl_anunci.mun_id=tbl_municipi.municipi_id 
				INNER JOIN tbl_raca on tbl_anunci.raca_id=tbl_raca.raca_id 
				INNER JOIN tbl_tipus_animal on tbl_raca.tipus_anim_id=tbl_tipus_animal.tipus_anim_id";

	if ($fTipoAnimal != "null"){
		$sql.=" WHERE tbl_tipus_animal.tipus_anim_id = ".$fTipoAnimal." AND tbl_raca.raca_id =".$fRaza;
	}

	if($fMunicipio != "null"){
		$sql.=" AND tbl_municipi.municipi_id =".$fMunicipio;
	}

	$sql.=" ORDER BY tbl_anunci.anu_data DESC";

	$qDatos = mysqli_query($conexion,$sql);
	
	if (mysqli_num_rows($qDatos)!=0){	
		while ($mostrarqDatos = mysqli_fetch_array($qDatos)) {
			echo utf8_encode("$mostrarqDatos[anu_data]<br/>");
			echo utf8_encode("$mostrarqDatos[anu_tipus]<br/>");
			echo utf8_encode("$mostrarqDatos[anu_nom]<br/>");
			echo utf8_encode("$mostrarqDatos[anu_contingut]<br/>");
			echo utf8_encode("$mostrarqDatos[contact_nom]<br/>");
			echo utf8_encode("$mostrarqDatos[contact_telf]<br/>");
			echo utf8_encode("$mostrarqDatos[contact_adre]<br/>");
			echo utf8_encode("$mostrarqDatos[municipi_nom]<br/>");
			echo utf8_encode("$mostrarqDatos[raca_nom]<br/><br/>");
			$fichero = "fotos/$mostrarqDatos[anu_foto]";
			if(file_exists($fichero)&&(($mostrarqDatos['anu_foto'])!='')){
				echo "<img src='$fichero' width='240' heigth='160' /><br/><br/><br/>";
			} else{
				echo "<img src='fotos/nofoto.png' width='240' heigth='160' /><br/><br>";
			}
		}
	}else{
		echo utf8_encode("NO HAY DATOS QUE MOSTRAR <br/>");
	}
		
}
	

?>