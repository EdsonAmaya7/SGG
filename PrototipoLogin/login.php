<?php
# Las claves de acceso, ahorita las pusimos aquí

$usuario_correcto = "admin";
$palabra_secreta_correcta = "admin";
/*
Formulario php
 */

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
# Luego de haber obtenido los valores comprobamos:
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    # Significa que coinciden, así que vamos a guardar algo
    # en el arreglo superglobal $_SESSION
    # Iniciar sesión para poder usar el arreglo
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["usuario"] = $usuario;
    # Luego redireccionamos a la página "Secreta" que apenas se esta desarrollando
    header("Location: intro.html");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}