<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulos</title>
    <style>
        table {
            margin: 0 auto;
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
        <?php 
            if(isset($_GET['articulo'])){
                include 'php\database.php';
                $id = $_GET['articulo'];
                $sql = "select * from articulos where art_id = '".$_GET['articulo']."'";
                $res = mysqli_query($c_on, $sql);
                if(mysqli_num_rows($res) > 0)
                {
                    while($row = mysqli_fetch_assoc($res)){
                        $art_name = $row['art_name'];
                        $art_pv = $row['art_pv'];
                        $art_cantidad = $row['art_cantidad'];
                        $art_pr = $row['art_pr'];
                        $art_departamento = $row['art_departamento'];
                        $art_suplidor = $row['art_suplidor'];
                        $art_unidad = $row['art_unidad'];
                        $art_status = $row['art_status'];
                    }
                }
            }else{
                $id = "";
                $art_name = "";
                $art_pv = "";
                $art_cantidad = "";
                $art_pr = "";
                $art_departamento = "";
                $art_suplidor = "";
                $art_unidad = "";
                $art_status = "";
            }

        ?>
    <form action="add_articulo.php" method="post" autocomplete="off">
    <table>
        <tr>
            <td colspan="6"><a href="index.php"><h1>NEGOCIO</h1></a></td>
        </tr>
        <tr>
            <td><span>Codigo</span></td>
            <td><input type="text" name="art_id" id="" value="<?php echo $id; ?>"></td>
            <td colspan="4"> | <a href="v_articulos.php"> Ver todos los Articulos</a></td>
        </tr>
        <tr>
            <td><span>Nombre</span></td>
            <td><input type="text" name="art_name" id="" value="<?php echo $art_name; ?>"></td>
        </tr>
        <tr>
            <td><span>Precio Venta</span></td>
            <td><input type="text" name="art_pv" id="" value="<?php echo $art_pv; ?>"></td>
            <td><span>Cantidad</span></td>
            <td><input type="text" name="art_cantidad" id="" value="<?php echo $art_cantidad; ?>"></td>
            <td><span>Punto Reorden</span></td>
            <td><input type="text" name="art_pr" id="" value="<?php echo $art_pr; ?>"></td>
        </tr>
        <tr>
            <td><span>Departamento</span></td>
            <td><input type="text" name="art_departamento" id="" value="<?php echo $art_departamento; ?>"></td>
            <td><span>Suplidor</span></td>
            <td><input type="text" name="art_suplidor" id="" value="<?php echo $art_suplidor; ?>"></td>
            <td><span>Unidad</span></td>
            <td><input type="text" name="art_unidad" id="" value="<?php echo $art_unidad; ?>"></td>
        </tr>
        <tr>
            <td><span>Estado</span></td>
            <td><input type="text" name="art_status" id="" value="<?php echo $art_status; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Guardar" name="addarticulo"></td>
        </tr>
    </table>
    </form>
</body>
</html>