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
    <div class="container" style="padding-top:20px;">        
        <?php
        //
        if(
        (isset($_POST["name"]) && $_POST["name"]!=null)
        && (isset($_POST["email"]) && $_POST["email"]!=null)
        && (isset($_POST["password"]) && $_POST["password"]!=null)
        && (isset($_POST["address"]) && $_POST["address"]!=null)
        && (isset($_POST["telephone"]) && $_POST["telephone"]!=null)
        )
        {
            echo '<div class="alert alert-success" role="alert"><strong>Registro Exitoso!</strong> desde ahora podrás participar en el foro. <br><br><a href="bienvenido.php?email='.$_POST["email"].'" class="btn btn-success">Clic para ingresar</a></div>';
        }
        else{
            header("Location: registro.php?e=error");
        }

        ?>
    </div>
</body>
</html>
