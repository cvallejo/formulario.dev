<?php
if(!isset($_GET["email"]))
{
    echo "No estás autorizado para ver esta página";
    exit;
}
else{
    if(isset($_GET["email"]))
    {
        $email = $_GET["email"];
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <h1>Bienvenid@ al foro</h1>
            <h3>Estás registrad@ con tu email <?php echo $email; ?></h3>

            <form class="form" action="#" method="post">
                <div class="col-sm-8">
                    <div class="form-group">
                        <textarea name="name" class="form-control" rows="5">Hola! cómo has estado?</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="sentence" class="form-control" placeholder="Escribe aquí tu comentario">
                    </div>
                    <input type="submit" name="name" value=" Enviar " class="btn btn-block btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
