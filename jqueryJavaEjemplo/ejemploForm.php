<?php

    /* bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
    */

    $conexion = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

    $anuncio = mysqli_query($conexion,'SELECT * FROM tbl_anunci');

    $municipio = mysqli_query($conexion, 'SELECT * FROM tbl_municipi');

    $tipo_animal = mysqli_query($conexion, "SELECT * FROM tbl_tipus_animal");

    $raza = mysqli_query($conexion, "SELECT * FROM tbl_raca");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>EjemploForm</title>
        <meta lang="es">
        <meta charset="utf-8">
        <meta name="author" content="Raúl">
        <meta name="description" content="">
        <!--
        <link rel="icon" type="image/png" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="" media="screen" />
        <script type="text/javascript" src=""></script>
        -->

        <script language="javascript" src="jquery-2.1.4.min.js"></script>
        <script language="javascript">
        $(document).ready(function(){
           $("#marca").change(function () {
                   $("#marca option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("modelos.php", { elegido: elegido }, function(data){
                    $("#modelo").html(data);
                    });            
                });
           })
        });
</script>
</script>
    </head>
    <body>
        <b>Tipo de mascota:</b> <br />
        <select name="tipo_animal">
            <option value="todo" selected>Todo</option>
            <?php
                while ($opTipoAnimal = mysqli_fetch_array($tipo_animal)){
                    echo '<option value="'.$opTipoAnimal['tipus_anim_id'].'">'.utf8_encode($opTipoAnimal['tipus_anim_nom']).'</option>';
                }
            ?>
        </select><br />
        <b>Raza:</b> <br />
        <select name="raza">
            <option value="todo" selected>Todo</option>
             <?php
                while ($opRaza = mysqli_fetch_array($raza)){
                    echo '<option value="'.$opRaza['raca_id'].'">'.utf8_encode($opRaza['raca_nom']).'</option>';
                }
            ?>
        </select><br />
        
    </body>
</html>