<?php

	/* bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
    */

    /* Conexion de la base de datos */

	$conexion = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

	/* Filtrar selects del formulario de busqueda */

	$tipo_animal = $_REQUEST['tipo_animal'];

	$raza=mysqli_query($conexion,"SELECT * FROM tbl_raca WHERE tipus_anim_id = '$tipo_animal'");

	while($row= mysqli_fetch_array($raza)){
			echo '<option value="'.$row['raca_id'].'">'.utf8_encode($row['raca_nom']).'</option>';
	}

	/* Filtrar selects del formulario de insertar anuncios */

	$tipo_animal2 = $_REQUEST['tipo_animal2'];

	$raza2=mysqli_query($conexion,"SELECT * FROM tbl_raca WHERE tipus_anim_id = '$tipo_animal2'");

	while($row= mysqli_fetch_array($raza2)){
			echo '<option value="'.$row['raca_id'].'">'.utf8_encode($row['raca_nom']).'</option>';
	}
?>
