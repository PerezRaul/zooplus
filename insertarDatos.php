<?php

/* CONECTARSE A LA BASE DE DATOS */
$usuario = "root";
$pwd = "";
$conn = new PDO('mysql:host=localhost;dbname=bd_botiga_animals', $usuario, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

/* Traer todos los datos */

/* Insertar los datos de nombre, telefono y dirección */
$InsSQL = "INSERT INTO tbl_contacte (contact_nom, contact_telf, contact_adre) VALUES (:contact_nom, :contact_telf, :contact_adre)";
$stmt = $conn->prepare($InsSQL);

try {
    $stmt->execute(array(':contact_nom' => $_POST['nombre'], ':contact_telf' => $_POST['telefono'], ':contact_adre' => $_POST['direccion']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}

/* Coger la id de contacto para meterla en la consulta de anuncios */
$idContacte = "SELECT MAX(tbl_contacte.contact_id) AS idContacte FROM tbl_contacte";


/* Insertar los datos de municipio */
$InsSQL2 = "INSERT INTO tbl_municipi (municipi_nom) VALUES (:municipi_nom)";
$stmt2 = $conn->prepare($InsSQL2);

try {
    $stmt2->execute(array(':municipi_nom' => $_POST['municipio2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}

/* Coger la id de municipio para meterla en la consulta de anuncios */
$idMunicipi = mysql_insert_id("SELECT municipi_id FROM tbl_municipi");


/* Insertar los datos de raza */
$InsSQL3 = "INSERT INTO tbl_raca (raca_nom, tipus_anim_id) VALUES (:raca_nom, :tipus_anim_id)";
$stmt3 = $conn->prepare($InsSQL3);

try {
    $stmt3->execute(array(':raca_nom' => $_POST['raza2'], ':tipus_anim_id' => $_POST['tipo_animal2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}

/* Coger la id de raza para meterla en la consulta de anuncios */
$idRaca = mysql_insert_id($conn);


/* Insertar los datos de titulo, contenido, fecha, foto y tipo del anuncio */
$InsSQL4 = "INSERT INTO tbl_anunci (anu_contingut, anu_nom, raca_id, mun_id, contact_id, anu_tipus) VALUES (:anu_contingut, :anu_nom, :raca_id, :mun_id, :contact_id, :anu_tipus)";
$stmt4 = $conn->prepare($InsSQL4);

try {
    $stmt4->execute(array(':anu_contingut' => $_POST['contenido'], ':anu_nom' => $_POST['titulo'], ':raca_id' => $_POST[$idRaca], ':mun_id' => $_POST[$idMunicipi], ':contact_id' => $_POST[$idContacte], ':anu_tipus' => $_POST['anuncio2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}


/* Falta poner los anu_data, anu_foto en la consulta stmt5 y InsSQL5 */

$stmt->closeCursor();
$stmt2->closeCursor();
$stmt3->closeCursor();
$stmt4->closeCursor();

?>