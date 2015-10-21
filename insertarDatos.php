<?php



/* CONECTARSE A LA BASE DE DATOS */
$usuario = "root";
$pwd = "";
$conn = new PDO('mysql:host=localhost;dbname=bd_botiga_animals', $usuario, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


/* Insertar los datos de nombre, telefono y dirección */
$InsSQL = "INSERT INTO tbl_contacte (contact_nom, contact_telf, contact_adre) VALUES (:contact_nom, :contact_telf, :contact_adre)";
$stmt = $conn->prepare($InsSQL);

try {
    $stmt->execute(array(':contact_nom' => $_POST['nombre'], ':contact_telf' => $_POST['telefono'], ':contact_adre' => $_POST['direccion']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}


/* Insertar los datos de municipio */
$InsSQL2 = "INSERT INTO tbl_municipi (municipi_nom) VALUES (:municipi_nom)";
$stmt2 = $conn->prepare($InsSQL2);

try {
    $stmt2->execute(array(':municipi_nom' => $_POST['municipio2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}


/* Insertar los datos de raza */
$InsSQL3 = "INSERT INTO tbl_raca (raca_nom) VALUES (:raca_nom)";
$stmt3 = $conn->prepare($InsSQL3);

try {
    $stmt3->execute(array(':raca_nom' => $_POST['raza2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}


/* Insertar los datos de tipo de animal */
$InsSQL4 = "INSERT INTO tbl_tipus_animal (tipus_anim_nom) VALUES (:tipus_anim_nom)";
$stmt4 = $conn->prepare($InsSQL4);

try {
    $stmt4->execute(array(':tipus_anim_nom' => $_POST['tipo_animal2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}

/* Insertar los datos de titulo, contenido, fecha, foto y tipo del anuncio */
$InsSQL5 = "INSERT INTO tbl_tipus_animal (anu_contingut, anu_nom, anu_data, /*anu_foto,*/ anu_tipus) VALUES (:anu_contingut, :anu_nom, :anu_data, /*:anu_foto,*/ :anu_tipus)";
$stmt5 = $conn->prepare($InsSQL5);

try {
    $stmt5->execute(array(':anu_contingut' => $_POST['contenido'], ':anu_nom' => $_POST['titulo'], ':anu_data' => date("y/m/d"), /*':anu_foto' => $_POST['foto'],*/ ':anu_tipus' => $_POST['anuncio2']));
}
catch (PDOException $e) {
    echo 'Error en realitzar la consulta:'. $e->getMessage() . "<br/>";
}

/*$ruta = "fotos/";
$ruta = $ruta . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
    echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";

} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}*/

$stmt->closeCursor();
$stmt2->closeCursor();
$stmt3->closeCursor();
$stmt4->closeCursor();

?>