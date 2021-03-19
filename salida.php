<?php

if(isset($_POST['nombre']) && $_POST['texto'] == true){

        $nombre = $_POST['nombre'];
        $texto = $_POST['texto'];
        # Creando archivo txt
        $crearArchivo = fopen($nombre.'.txt', "x"); // Crear archivo
        $AbrirArchivo = fopen($nombre.'.txt', "a+"); // Abrir archivo
        fwrite($AbrirArchivo, $texto); // Función para escribir dentro del archivo .txt

        

}




$resultado="";

$resultado.="<h5>Nombre de los archivos</h5>";

$abc = scandir(getcwd(), 1); // Para obtener todos los archivos del fichero

$arrlength = count($abc);
for($x = 0; $x < $arrlength; $x++) {
    $str = substr($abc[$x], -4);

    if($abc[$x] != "." && $abc[$x] != ".." ){
    if ($str == ".txt")
    {
        $resultado.= "-> <strong>Archivo de texto: </strong><i>".$abc[$x]."</i><br>";
    } elseif ($str == ".php"){
        $resultado.= "-> <strong>Archivo PHP: </strong><i>".$abc[$x]."</i><br>";
    }elseif ($str == "html"){
        $resultado.= "-> <strong>Archivo HTML: </strong><i>".$abc[$x]."</i><br>";
    }
    else{
        $resultado.= "-> <strong>Carpeta: </strong><i>".$abc[$x]."</i><br>";
    }
    }
}


echo $resultado;

?>
