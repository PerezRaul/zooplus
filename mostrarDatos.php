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
		echo utf8_encode("<section class='contenedorBusqueda'>						");
        echo utf8_encode("   <article class='fondoBusqueda'>						");
        echo utf8_encode("      <ul class='titularBusqueda'>						");
		echo utf8_encode("			<li>$mostrarqDatos[anu_nom]</li>				");//dato anuncio
		echo utf8_encode("			<li>$mostrarqDatos[anu_data]</li>				");
		echo utf8_encode("		</ul>												");
        echo utf8_encode("        <div class='fotoBusqueda'>						");
        echo utf8_encode("        	<img src='image/'								");
        echo utf8_encode("        </div>											");
        echo utf8_encode("        <div class='datosBusqueda'>						");
        echo utf8_encode("            <ul class='listaBusqueda'>					");
        echo utf8_encode("                <li>$mostrarqDatos[anu_contingut]</li>	");
        echo utf8_encode("                <li>$mostrarqDatos[raca_nom]</li>			");
        echo utf8_encode("                <li></li>									");
        echo utf8_encode("                <li></li>									");
        echo utf8_encode("                <li></li>									");
        echo utf8_encode("                <li></li>									");
        echo utf8_encode("            </ul>											");
        echo utf8_encode("        </div>											");
        echo utf8_encode("    </article>											");
        echo utf8_encode("</section>												");


			/*
			echo utf8_encode("<br/>");
			echo utf8_encode("$mostrarqDatos[contact_nom]<br/>");
			echo utf8_encode("$mostrarqDatos[contact_telf]<br/>");
			echo utf8_encode("$mostrarqDatos[contact_adre]<br/>");
			echo utf8_encode("$mostrarqDatos[municipi_nom]<br/>");
			echo utf8_encode("$mostrarqDatos[anu_tipus]<br/>");*/
		}
	}else{
		echo utf8_encode("NO HAY DATOS QUE MOSTRAR <br/>");
	}
		
}

?>