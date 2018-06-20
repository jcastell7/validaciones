
<?php
require "servicio.php";
if (isset($_POST['subir'])) {
$servicio=new servicio();
$servicio->agregarInscripcion();
unset($_POST['subir']);
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>validaciones</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <div class="contact-clean">
            <form action='index.php' method='post'>
                <h2 class="text-center">formulario</h2>
                <div class="form-group"><label for="nombre">Nombre *</label><input class="form-control" type="text" name="nombre" required="" placeholder="Nombre" inputmode="latin-name" pattern="([a-zA-Z]|(ñ|Ñ))+"id="nombre"></div>
                <div class="form-group"><label for="correo">Correo electronico *</label><input class="form-control" type="text" name="correo" required="" placeholder="Correo Electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" inputmode="email" id="correo"></div>
                <div class="form-group"><label for="cedula">Cedula*</label><input class="form-control" type="text" name="cedula" required="" placeholder="Cedula" pattern="[0-9]*" inputmode="numeric" id="cedula"></div>
                <div class="form-group d-flex flex-column"><label for="nombre">facebook (opcional)<input type="checkbox" onclick="document.getElementById('facebook').disabled = this.checked;" name="check" id="check" value="seleccionado"></label>
                    <div class="d-flex"><label>https://www.facebook.com/</label><input class="form-control" type="text" name="facebook" placeholder="usuario facebook" id="facebook"></div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" name="subir" id="subir">enviar</button></div>
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>