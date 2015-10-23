<?php

/* Conectarse a la base de datos */
$con = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

/* Insertar los datos de nombre, telefono y dirección */
$InsSQL = "INSERT INTO tbl_contacte (contact_nom, contact_telf, contact_adre) 
           VALUES ('$_REQUEST[nombre]', '$_REQUEST[telefono]', '$_REQUEST[direccion]')";
mysqli_query($con, utf8_decode($InsSQL));

/* Coger la id de contacto para meterla en la consulta de anuncios */
$idContacte = mysqli_insert_id($con);

/* Obtener la fecha actual del sistema, para introducirla en el anuncio */
$fecha = date('Y/m/d');

/* Coger la foto insertada en el form y meterla en la variable para insertarla en la base de datos */
$foto = $_FILES['foto']['name']; 
$ruta = $_FILES['foto']['tmp_name']; 
$destino = 'fotos/'.$foto;
copy($ruta, $destino); 

/* Insertar los datos de titulo, contenido, fecha, foto y tipo del anuncio */
$InsSQL2 = "INSERT INTO tbl_anunci (anu_contingut, anu_nom, anu_data, anu_foto, raca_id, mun_id, contact_id, anu_tipus) 
            VALUES ('$_REQUEST[contenido]', '$_REQUEST[titulo]', '$fecha', '$foto', $_REQUEST[raza2], $_REQUEST[municipio2], $idContacte, '$_REQUEST[anuncio2]')";
mysqli_query($con, utf8_decode($InsSQL2));

/*echo "<script type='text/javascript'>alert('¡Tu consulta ha sido satisfactória!')</script>";*/

mysqli_close($con);

header("Location: formulario.php");


?>