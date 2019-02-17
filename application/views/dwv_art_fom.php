<?php
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
?>
<form action="add_articulo.php" method="post" autocomplete="off">
    <ul>
        <li><span>Codigo</span></li>
            <li><input type="text" name="art_id" id="" value="<?php echo $id;?>"></li>
        <li colspan="4"><a href="v_articulos.php"> Ver todos los Articulos</a></li>
        <li><span>Nombre</span></li>
            <li><input type="text" name="art_name" id="" value="<?php echo $art_name;?>"></li>
        <li><span>Precio Venta</span></li>
            <li><input type="text" name="art_pv" id="" value="<?php echo $art_pv;?>"></li>
        <li><span>Cantidad</span></li>
            <li><input type="text" name="art_cantidad" id="" value="<?php echo $art_cantidad;?>"></li>
        <li><span>Punto Reorden</span></li>
            <li><input type="text" name="art_pr" id="" value="<?php echo $art_pr;?>"></li>
        <li><span>Departamento</span></li>
            <li><input type="text" name="art_departamento" id="" value="<?php echo $art_departamento;?>"></li>
        <li><span>Suplidor</span></li>
            <li><input type="text" name="art_suplidor" id="" value="<?php echo $art_suplidor;?>"></li>
        <li><span>Unidad</span></li>
            <li><input type="text" name="art_unidad" id="" value="<?php echo $art_unidad;?>"></li>
        <li><span>Estado</span></li>
            <li><input type="text" name="art_status" id="" value="<?php echo $art_status;?>"></li>
        <li><input type="submit" value="Guardar" name="addarticulo"></li>
    </ul>
</form>