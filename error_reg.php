<!DOCTYPE html>
<html lang="en">
<?php
    include 'funciones.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Fallido</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="./login.php" id="signup-form" class="signup-form" method="POST">
                        <h1 class="form-title">Su cuenta no pudo ser creada</h1>
                        <br>
                        <p> Por favor reintente sin dejar ningún campo en blanco,
                        o si ya utilizó su correo anteriormente inicie sesión con su cuenta</p>
                        <br><br><br><br>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Volver al login" />
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/registro.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>