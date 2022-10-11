<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calcula tu promedio</h1>
    <div id="formulario">
        <form action="procesador.php" method="POST">
            <label for="" id="n">Nombre:</label><br>
            <input type="text" id="a" name="nombre"> <br><br>

            <label for="" id="n">Nota 1:</label><br>
            <input type="text"  id ="a" name="nota1"> <br><br>

            <label for="" id="n">Nota 2:</label><br>
            <input type="text" id="a" name="nota2"> <br><br>

            <label for="" id ="n">Nota 3:</label><br>
            <input type="text" id="a" name="nota3"> <br><br>

            <label for="" id ="n">Nota 4:</label><br>
            <input type="text" id="a" name="nota4"> <br> <br>


            <input type="submit" value="Enviar" name="submit">
        </form>
    </div>
</body>
</html>