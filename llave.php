<?php
if(isset($_POST['set']))
{
    print "<?xml version='1.0' encoding='UTF-8'?>";
    echo "<llave>";
        echo "<n>" . $_POST['nombre'] . "</n>";
        echo "<a>" . $_POST['apellidos'] . "</a>";
        echo "<c>" . $_POST['cedula'] . "</c>";
    echo "</llave>";
}