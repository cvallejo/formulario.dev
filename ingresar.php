<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingreso a nuestro sistema de chat</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Ingresa tus datos</h1>
            <?php
            if(isset($_POST["email"]))
            {
                $email = $_POST["email"];
                $pass = $_POST["password"];

                if($email=="paula@uai.cl" && $pass=="123"){
                    header("Location: bienvenido.php?email=".$email."");
                }
                else {
                    echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Error!</strong> tu email o contraseña no son válidos.</div>";
                }
            }
            ?>
            <form class="form" action="" method="post">
                <div class="form-group">
                    <label for="email">Usuario</label>
                    <input type="text" name="email" class="form-control" placeholder="Escribe tu correo electrónico">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña">
                </div>

                <div class="form-group">
                    <input type="submit" value="ingresar" class="btn btn-success">
                </div>
            </form>

        </div>
    </div>

</body>
</html>
