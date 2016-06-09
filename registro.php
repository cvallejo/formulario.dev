<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro para nuesrto sistema de chat</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Registro</h1>
            <?php
                if(isset($_GET["e"]))
                {
                    echo '<div class="alert alert-danger" role="alert"><strong>Error!</strong> completa todos los datos del formulario para registrarte.</div>';
                }
            ?>
            <form class="form" action="procesa_registro.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre Completo *</label>
                    <input type="text" name="name" class="form-control" value="" placeholder="Escribe tu nombre y apellido" required="required">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico *</label>
                    <input type="text" name="email" class="form-control" placeholder="Escribe tu email" required="required">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña *</label>
                    <input type="password" name="password" class="form-control" placeholder="Escribe una contraseña súper segura" required="required">
                </div>
                <div class="form-group">
                    <label for="address">Dirección *</label>
                    <input type="text" name="address" class="form-control" placeholder="Escribe la direcciónd de tu casa" required="required">
                </div>
                <div class="form-group">
                    <label for="telephone">Teléfono *</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Escribe tu teléfono" required="required">
                </div>

                <div class="form-group">
                    <input type="submit" value="Registrarme" class="btn btn-primary">
                </div>

            </form>

        </div>
    </div>

</body>
</html>
