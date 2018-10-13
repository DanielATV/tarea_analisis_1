<!DOCTYPE html>
<html lang="en">
<?php
    include 'funciones.php'
?>	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espere un momento...</title>
</head>
<body>
        <table>
                <?php
                    foreach ($_POST as $key => $value) {
                        echo "<tr>";
                        echo "<td>";
                        echo $key;
                        echo "</td>";
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                </table>
</body>
</html>