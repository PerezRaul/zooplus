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
		}
	}else{
		echo utf8_encode("NO HAY DATOS QUE MOSTRAR <br/>");
	}
		
}


/*
echo '		<table border="0" cellspacing="0" cellpadding="2" width="752" id="product-list">';
echo '				 <tbody class="products-header">';
echo '					<tr class="boldtitle">';
echo '						<td class="shopRowHeaderBlack" colspan="2">';                                    
echo '							<a name=""></a>Acuarios para cría de peces JBL: de calidad';
echo '			            </td>';
echo '			            <td class="shopRowHeaderBlack" align="center"></td>';
echo '				</tbody>';
echo '				<tbody class="product-variants-list">';
echo '					<tr>';
echo '						<td class="product-image" rowspan="4" align="center" valign="top">';
echo '							<a class="offerList image" href="/shop/tienda_peces/acuario/crianza/jbl_acuarios_para_la_cria_de_peces/174838" title="Set para el cultivo de nauplios de artemia JBL">';
echo '								<img class="productlist" src="//media.zooplus.com/bilder/set/para/el/cultivo/de/nauplios/de/artemia/jbl/1/140/lp_22121_jbl_artemioset_1.jpg" border="0" alt="Set para el cultivo de nauplios de artemia JBL">';
echo '								<span class="caption">Más fotos (2)</span>';
echo '							</a>';
echo '						</td>';
echo '					</tr>';
echo '					<tr style="background-color:#ffffff;" class="text">';
echo '						<td valign="middle" colspan="6">';
echo '							<a class="follow3 product__title" href="/shop/tienda_peces/acuario/crianza/jbl_acuarios_para_la_cria_de_peces/174838" title="Set para el cultivo de nauplios de artemia JBL">';
echo '								<b>Set para el cultivo de nauplios de artemia JBL</b>';
echo '							</a>';
echo '						</td>';
echo '					</tr>';
echo '					<tr style="background-color:#ffffff;" class="text">';
echo '						<td colspan="6">';
echo '							<div class="best__readable">Este acuario está ideado para la crianza de nauplios de artemia. Los nauplios son la comida más adecuada para muchas especies de peces y crustáceos en estadios post-larvarios.</div>';
echo '							<p class="delivery-time-ct"></p>';
echo '						</td>';
echo '					</tr>';
echo '				</tbody>';
echo '			    <tbody class="products-footer">';
echo '			        <tr>';
echo '				        <td colspan="6" height="15" valign="top">';
echo '					        <a href="#top">';
echo '					        	<img border="0" title="Top" alt="Top" src="image/table_top.gif">';
echo '					        </a>';
echo '				        </td>';
echo '			        </tr>';
echo '			    </tbody>'; 
echo '			</table>';

?>*/