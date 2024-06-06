<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" onsubmit="return validarFormulario()">
        
        <h1>Datos</h1>
        <input type="text" name="NombreTB" placeholder="Nombre" id="nombre">
        <br>
        <input type="text" name="Correo" placeholder="Correo" id="correo">
        <br>
        <input type="text" name="MensajeTB" placeholder="texto" id="mensaje">
        <br>
        <input type="submit" name="Register">

    </form>
    <script src="validacion.js"></script>
    <?php
    include("procesador.php")
    ?>
</body>
</html>