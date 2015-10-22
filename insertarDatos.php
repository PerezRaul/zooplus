<?php

/* Conectarse a la base de datos */
$con = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

/* Insertar los datos de nombre, telefono y dirección */
$InsSQL = "INSERT INTO tbl_contacte (contact_nom, contact_telf, contact_adre) 
           VALUES ($_REQUEST[nombre], $_REQUEST[telefono], $_REQUEST[direccion])";
mysqli_query($con, $InsSQL);

/* Coger la id de contacto para meterla en la consulta de anuncios */
$idContacte = mysqli_insert_id($con);

/* Obtener la fecha actual del sistema, para introducirla en el anuncio */
$fecha = date('Y/m/d');

/* Insertar los datos de titulo, contenido, fecha, foto y tipo del anuncio */
$InsSQL2 = "INSERT INTO tbl_anunci (anu_contingut, anu_nom, anu_data, raca_id, mun_id, contact_id, anu_tipus) 
            VALUES ($_REQUEST[contenido], $_REQUEST[titulo], '$fecha', $_REQUEST[raza2], $_REQUEST[municipio2], $idContacte, '$_REQUEST[anuncio2]')";
mysqli_query($con, $InsSQL2);

/* Falta poner anu_foto en el insert de anunci */

/*echo "<script>alert('¡Tu consulta ha sido satisfactória!')</script>";*/

header("Location: formulario.php");


?>