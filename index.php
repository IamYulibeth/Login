<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login CINETECH</title>
</head>

<body>
    <section class="form-register">
        <img src="assets/img/logoandtext.png">
        <h4>Inicia Sesión</h4>
        <form action="validacion.php" method="POST">
        <input class="inputs" type="text" name="username" id="username" placeholder="Ingrese su nombre de usuario">
        <input class="inputs" type="password" name="password" id="passworc" placeholder="Ingrese su contraseña">
        
        <?php
if(isset($_GET{'error'})){
    $error = $_GET['error'];
    if($error == "incorrecto") {
        echo "<h5>¡Error!</h5>";
        echo "<h5>El usuario y contraseña no son válidos</h5>";
    }
    if ($error == "vacio"){
        echo "<h5>¡Error!</h5>";
        echo "<h5>Los datos se encuentran vacios</h5>";
    }
}
?>
        <input class="button" type="submit" value="Iniciar Sesión">
        <p>¿Olvidaste tu contraseña?</p>
        </form>
    </section>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>