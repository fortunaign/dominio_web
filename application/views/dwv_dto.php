<?php

echo "<h1>Pagina departamento</h1>";
/*
    require 'php\database.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "select * from departamentos where dto_id = ".$id;
        $res = mysqli_query($c_on, $sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                $dto_name = $row['dto_name'];
                $dto_status = $row['dto_status'];
            }
        }
    }else{
        $id = "";
        $dto_name = "";
        $dto_status = "";
    }
    ?>
    <form action="add_departamentos.php" method="post" autocomplete="off">
    <table>
        <tr>
            <td colspan="6"><a href="index.php"><h1>NEGOCIO</h1></a></td>
        </tr>
        <tr>
            <td><a href=""><span>Codigo</span></a></td>
            <td><input type="text" name="dto_id" id="" value="<?php echo $id; ?>"></td>
            <td colspan="2"><a href="v_departamentos.php">Ver todos los Departamentos...</a></td>
        </tr>
        <tr>
            <td><span>Departamento</span></td>
            <td><input type="text" name="dto_name" id="" value="<?php echo $dto_name; ?>"></td>
            <td><span>Estado</span></td>
            <td><input type="text" name="dto_status" value="<?php echo $dto_status; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Guardar" name="adddep"></td>
        </tr>
    </table>
    </form>
    
    <table>
        <tr>
            <td colspan="4"><a href="index.php"><h1>NEGOCIO</h1></a></td>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td><input type="submit" value="Buscar"></td>
            <td> | <a href="departamento.php">Agregar Departamento...</a></td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Departamento</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        <?php
            require 'php\database.php';
            $sql = "select * from departamentos";
            $res = mysqli_query($c_on, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res)){
                    echo "<tr><td>".$row['dto_id']."</td><td>".$row['dto_name']."</td><td>".$row['dto_status']."</td>".
                    "<td><a href='departamento.php?id=".$row['dto_id']."'>Editar</a></td></tr>";
                }
            }else{

            }
        ?>
        
    </table>


    */

?>