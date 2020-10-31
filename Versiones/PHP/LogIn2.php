<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="sttlesheet" href="/css/estilos.css">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']?>" method="post">
            <h1>Log In</h1>
            <label for="">Correo:</label>
            <input type="text" name="correo">
            <label for="">Contraseña:</label>
            <input type="text" name="contraseña">
            <input type="submit" name="submit">
            <?php
                include ("/PHP/validación.php");
            ?>
        </form>
    </body>
</html>