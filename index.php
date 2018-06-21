<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>validaciones</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/alert.css">
        <script src="assets/js/alerts.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
    </head>

    <body>
        <?php
require "servicio.php";
if (isset($_POST['subir'])) {
$servicio=new servicio();
$servicio->agregarInscripcion();
unset($_POST['subir']);
}
?>
        <div class="contact-clean">
            <form action='index.php' method='post'>
                <h2 class="text-center">formulario</h2>
                <div class="form-group"><label for="nombre">Nombre *</label><input class="form-control" type="text" name="nombre" required="" placeholder="Nombre" inputmode="latin-name" pattern="([a-zA-Z]|(ñ|Ñ))+"id="nombre"></div>
                <div class="form-group"><label for="correo">Correo electronico *</label><input class="form-control" type="text" name="correo" required="" placeholder="Correo Electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" inputmode="email" id="correo"></div>
                <div class="form-group"><label for="cedula">Cedula*</label><input class="form-control" type="text" name="cedula" required="" placeholder="Cedula" pattern="[0-9]*" inputmode="numeric" id="cedula"></div>
                <div class="form-group d-flex flex-column"><label for="nombre">facebook (opcional)<input type="checkbox" onclick="document.getElementById('facebook').disabled = !this.checked;" name="check" id="check" value="seleccionado"></label>
                    <div class="d-flex"><label>https://www.facebook.com/</label><input class="form-control" type="text" name="facebook" placeholder="usuario facebook" id="facebook" disabled=""></div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" name="subir" id="subir">enviar</button></div>
            </form>
        </div>
    
    </body>
</html>