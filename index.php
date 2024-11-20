<?php
$nom="";
$paterno="";
$materno="";
if(isset($_GET["nom"],$_GET["apPat"],$_GET["apMat"])){
$nom=$_GET["nom"];
$paterno=$_GET["apPat"];
$materno=$_GET["apMat"];
echo "<h1>El nombre completo es ".$nom." ".$paterno." ".$materno."</h1>";
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            Primer Ejercicio PHP
        </title>
    </head>
<body>

<form action="index.php" method="GET">
    <label for="nom">Nombre persona</label>
    <input type="text" id="nom" name="nom" value="Juan">
    <br>
    <label for="apPat">Apellido Paterno</label>
    <input type="text" id="apPat" name="apPat" value="Lopez">
    <br>
    <label for="apMat">Apellido Materno</label>
    <input type="text" id="apMat" name="apMat" value="Martinez">
    <br>
    <button type="submit">Enviar</button>  
<form>
    <h1>
    <?php
    echo $nom;
    ?>
    </h1>
</body>
</html>
