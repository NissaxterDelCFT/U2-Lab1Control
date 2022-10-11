<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
</body>
</html>

<?php

    if ( isset($_POST["submit"]) && !empty($_POST["submit"]) ){

        $nom=$_POST["nombre"];
        $n1=$_POST["nota1"];
        $n2=$_POST["nota2"];
        $n3=$_POST["nota3"];
        $n4=$_POST["nota4"];

        $promedio=($n1+$n2+$n3+$n4)/4;
        
        $decimal=round($promedio, 1);
        if(empty($nom)){
            echo "Ingrese su Nombre";
        }if (empty($n1)){
            echo "Ingrese la nota 1";
        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,20}$/", $_POST["nombre"])){
            echo "Nombre con caracteres INVALIDOS"; 
        }else if ($n1<=0 or $n1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if ($n2<=0 or $n2 >7.0){
            echo "El valor de la nota 2 es incorrecto";
        }else if ($n3<=0 or $n3 >7.0){
            echo "El valor de la nota 3 es incorrecto";
        }else if ($n4<=0 or $n4 >7.0){
            echo "El valor de la nota 4 es incorrecto";
        }else if($promedio>=4.0){
            echo "<p><b>Has Aprobado la Asignatura!<br>
            <b>Nombre del Estudiante: </b>".$nom."<br>
            <b>Notas Ingresadas:</b><br> Nota 1: ".$n1."<br>Nota 2: ".$n2."<br>Nota 3: ".$n3."<br>Nota 4: ".$n4."<br>
            <b>Promedio:</b> ".$decimal. "<br>
            <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos</p>";
        }else{
            echo "<b><script language='javascript'>alert('REPROBADO!');</script></b>
            <p>REPROBADO<br><b>Nombre del Estudiante: </b>".$nom."<br>
            <b>Notas Ingresadas:</b><br> Nota 1: ".$n1."<br>Nota 2: ".$n2."<br>Nota 3: ".$n3."<br>Nota 4: ".$n4."<br>
            <b>Promedio:</b> ".$decimal. "<br>
            <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos</p>";
        }
    }
?>