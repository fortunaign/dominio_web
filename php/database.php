<?php
$servername = "127.0.0.1"; $username = "root"; $password = ""; $database = "dominio_web";
$c_on = mysqli_connect($servername, $username, $password, $database);
if(!$c_on){
    die("Connection failed: " . mysql_connect_error());
}


