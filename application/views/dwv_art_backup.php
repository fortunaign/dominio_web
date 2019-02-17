<?php
    /*
if(isset($_GET['articulo']))
{
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
echo '
<form action="add_articulo.php" method="post" autocomplete="off">
    <ul>
        <li><span>Codigo</span></li>
            <li><input type="text" name="art_id" id="" value="'.$id.'"></li>
        <li colspan="4"><a href="v_articulos.php"> Ver todos los Articulos</a></li>
        <li><span>Nombre</span></li>
            <li><input type="text" name="art_name" id="" value="'.$art_name.'"></li>
        <li><span>Precio Venta</span></li>
            <li><input type="text" name="art_pv" id="" value="'.$art_pv.'"></li>
        <li><span>Cantidad</span></li>
            <li><input type="text" name="art_cantidad" id="" value="'.$art_cantidad.'"></li>
        <li><span>Punto Reorden</span></li>
            <li><input type="text" name="art_pr" id="" value="'.$art_pr.'"></li>
        <li><span>Departamento</span></li>
            <li><input type="text" name="art_departamento" id="" value="'.$art_departamento.'"></li>
        <li><span>Suplidor</span></li>
            <li><input type="text" name="art_suplidor" id="" value="'.$art_suplidor.'"></li>
        <li><span>Unidad</span></li>
            <li><input type="text" name="art_unidad" id="" value="'.$art_unidad.'"></li>
        <li><span>Estado</span></li>
            <li><input type="text" name="art_status" id="" value="'.$art_status.'"></li>
        <li><input type="submit" value="Guardar" name="addarticulo"></li>
    </ul>
</form>
';

<table>
    <tr>
        <td colspan="12"><a href="<?= base_url()?>"><h1>NEGOCIO</h1></a></td>
    </tr>
    <tr>
        <form action="#" method="post" autocomplete="off">
        <td colspan="12">
            <input type="text" name="pc" id="">
            <input type="submit" value="Buscar" name="buscar">
            <input type="submit" value="Ver Todos">
            | <a href="<?= base_url()?>Welcome/index/addarticulo">Agregar Articulo...</a>
        </td>
        <td colspan="4"></td>
        </td>
        </form>
    </tr>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Precio Venta</th>
        <th>Cantidad</th>
        <th>Punto Reorden</th>
        <th>Ultima Edicion</th>
        <th>Departamento</th>
        <th>Suplidor</th>
        <th>Unidad</th>
        <th>Estado</th>
        <th>Opciones</th>
    </tr>
        <?php
        require 'php\database.php';
        if(isset($_POST['buscar'])){
            $sql = "select * from articulos where art_id = '".$_POST['pc']."' or art_name like '%".$_POST['pc']."%' or ".
            "art_departamento = '".$_POST['pc']."' or art_suplidor = '".$_POST['pc']."'";
            unset($_POST);
        }else{
            $sql = "select * from articulos";
        }
        $res = mysqli_query($c_on, $sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<tr><td class='lista'>".$row["art_id"]."</td>"."<td class='lista'>".$row["art_name"]."</td>".
                "<td class='lista'>".$row["art_pv"]."</td><td class='lista'>".$row["art_cantidad"]."</td><td class='lista'>".
                $row["art_pr"]."</td><td class='lista'>".$row["art_edicion"]."</td><td class='lista'>".$row["art_departamento"]."</td><td class='lista'>".
                $row["art_suplidor"]."</td><td class='lista'>".$row["art_unidad"]."</td><td class='lista'>".$row["art_status"]."</td>".
                "<td class='lista'><a href='articulos.php?articulo=".$row['art_id']."'>Editar</a>";
            }
        }else{
            echo "<td>0 Resultados</td>";
        }
        mysqli_close($c_on);
    ?>
</table>

    */
?>

