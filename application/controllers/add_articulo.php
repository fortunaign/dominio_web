<?php
require 'php\database.php';
if(isset($_POST['addarticulo'])){
    if($_POST['art_id'] == ""){
        $sql = "select max(art_id) as art_id from articulos";
        $res = mysqli_query($c_on, $sql);
        if(mysqli_num_rows($res) > 0)
        {
            $row = mysqli_fetch_assoc($res);
            $id = $row['art_id'];
            $id += 1;
            
        }
        echo "->".$id;
        $sql = "insert into articulos(art_id, art_name, art_pv, art_cantidad, art_pr, art_edicion, art_departamento, art_suplidor, art_unidad, art_status)".
        "values('".$id."', '".$_POST['art_name']."', '".$_POST['art_pv']."', '".$_POST['art_cantidad']."', '".$_POST['art_pr']."',".
        "(SELECT NOW()), '".$_POST['art_departamento']."', '".$_POST['art_suplidor']."', '".$_POST['art_unidad']."', '".$_POST['art_status']."')";
        if(mysqli_query($c_on, $sql)){
            header('Location:v_articulos.php');
        }else{
            header('Location:v_articulos.php');
        }
    }else{
        $sql = "update articulos set art_name = '".$_POST['art_name']."', art_pv = '".$_POST['art_pv']."', art_cantidad = '".$_POST['art_pr']."',".
        "art_edicion = (SELECT NOW()), art_departamento = '".$_POST['art_suplidor']."', art_unidad = '".$_POST['art_unidad']."', art_status = '".$_POST['art_status']."' where art_id = '".$_POST['art_id']."'";
        if(mysqli_query($c_on, $sql)){
            header('Location:v_articulos.php');
        }else{
            header('Location:v_articulos.php');
        }
    }

    
    mysqli_close($c_on);
}