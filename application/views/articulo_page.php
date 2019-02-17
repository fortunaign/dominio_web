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