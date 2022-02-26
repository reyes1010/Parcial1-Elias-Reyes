<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Recibe aritmeticos</title>

    <br>
</head>

<body>
    <?php
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dui = $_POST['dui'];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"]

    
    ?>

    <div class="container-fluid">
        <table class="table table-hover" border="1">
            <tbody>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dui</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?php echo $codigo?></td>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $apellido?></td>
                    <td><?php echo $dui?></td>
                    <td><?php echo $direccion?></td>
                    <td><?php echo $telefono?></td>
                    <td><?php echo $email?></td>
                </tr>
            </tbody>
        </table>
    </div>


   
</body>

</html>