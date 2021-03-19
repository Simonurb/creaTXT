<?php

if(isset($_POST['nombreCarpeta']) == true){

    $nombreCarpeta = $_POST['nombreCarpeta'];

    $crearCarpeta = mkdir ($nombreCarpeta, 0777); // Crear directorio
}




?>