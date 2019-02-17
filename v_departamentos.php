<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departamentos</title>
    <style>
        table {
            margin: 0 auto;
        }
        h1 {
            text-align:center;
        }
    </style>
</head>
<body>
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
</body>
</html>