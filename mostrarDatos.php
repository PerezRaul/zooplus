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
		echo "<section class='contenedorBusqueda'>";                   
        echo "   <article class='fondoBusqueda'> ";                       
        echo "        <div class='titular'>";
        echo "            <ul class='titularBusqueda'>";
        echo utf8_encode("    <li id='tData'>$mostrarqDatos[anu_data]</li>");                     
        echo utf8_encode("    <li id='tNom'>$mostrarqDatos[anu_nom]</li>");                   
        echo "            </ul> ";
        echo "        </div>  ";                                         
        echo "       <div class='fotoBusqueda'>";

			//mostramos el fichero si existe, sino reemplazamos por uno general
			$fichero = "fotos/$mostrarqDatos[anu_foto]";
			if(file_exists($fichero)&&(($mostrarqDatos['anu_foto'])!='')){
				echo "<img src='$fichero' width='240' heigth='160' /><br/><br/><br/>";
			} else{
				echo "<img src='fotos/nofoto.png' width='240' heigth='160' /><br/><br>";
			}
                          
        echo "        </div>";                                            
        echo "        <div class='datosBusqueda'>";                       
        echo "            <ul class='listaBusqueda'>";
        echo utf8_encode("	<li>Estado: $mostrarqDatos[anu_tipus]</li>");                      
        echo utf8_encode("	<li>Raza: $mostrarqDatos[raca_nom]</li>");    
        echo utf8_encode("	<li>Contacto:</li>");
        echo utf8_encode("	<li style='list-style:none;'>$mostrarqDatos[contact_nom]</li>");          
        echo utf8_encode("	<li style='list-style:none;'>$mostrarqDatos[contact_telf]</li>");                                 
        echo utf8_encode("  <li style='list-style:none;'>$mostrarqDatos[contact_adre]</li>");                                
        echo utf8_encode("  <li style='list-style:none;'>$mostrarqDatos[municipi_nom]</li><br/>");                               
        echo utf8_encode("  <li>Anuncio: $mostrarqDatos[anu_contingut]</li>");                                 
        echo utf8_encode("</ul> ");                                        
        echo "        </div>";                                                
        echo "    </article>";
        echo "    <div>";
        echo "        <a href='#top'><img src='image/fondo.gif'/></a>";
        echo "   </div>  ";                                          
        echo "</section>";                               
		}
	}else{
		echo utf8_encode("NO HAY DATOS QUE MOSTRAR <br/>");
	}
		
}

?>