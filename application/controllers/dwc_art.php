<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dwc_art extends CI_Controller {
    
    public function index($inf = '')
    {
        $this->load->view('_dwv_head');
        switch ($inf) {
            case 'add':
                $this->load->view('dwv_art_fom');
                break;
            case 'con':
                $this->load->view('dwv_art_cta');
                break;
            default:
                $this->load->view('dwv_art');
                break;
        }
        $this->load->view('_dwv_foot');
    }
    
    /*
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
    */
}