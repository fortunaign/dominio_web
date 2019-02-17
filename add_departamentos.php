<?php
require 'php\database.php';
if(isset($_POST['adddep'])){
    if($_POST['dto_id'] == ""){
        $sql = "select max(dto_id) as ID from departamentos";
        $res = mysqli_query($c_on, $sql);
        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);
            $id = $row['ID'];
            $id += 1;
        }else{
            $id = 0;
            $id += 1;
        }
        $sql = "insert into departamentos(dto_id, dto_name, dto_status) value('".$id."', '".$_POST['dto_name']."', '".$_POST['dto_status']."')";
        if (mysqli_query($c_on, $sql)) {
            echo "Guardado!";
            header('Location:v_departamentos.php');
        }else{
            echo "Error!";
            header('Location:v_departamentos.php');
        }
    }else{
        $sql = "update departamentos set dto_name = '".$_POST['dto_name']."', dto_status = '".$_POST['dto_status']."'"
        ." where dto_id = '".$_POST['dto_id']."'";
        if (mysqli_query($c_on, $sql)) {
            echo "Guardado!";
            header('Location:v_departamentos.php');
        }else{
            echo "Error!";
            header('Location:v_departamentos.php');
        }
    }
    
}   