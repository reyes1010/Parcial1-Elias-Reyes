<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
            <div class="collapse navbar-collapse justify-content-space-beetwen" id="navbarSupportedContent" <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="/Parcial1_post/form_clientes.php">Post</a>
                </li>
             
                
                <li class="nav-item">
                    <a class="nav-link" href="/Parcial1_Ajax/formulario.php">Ajax</a>
                </li>
         
            </div>
        </div>
    </nav> 


    <div class="container ">
        <br />
        <div class="row justify-content-center ">
            <div style="margin-top: 40px;" class="col-6 p-5 bg-white shadow-lg rounded ">
                <h3>Nuevo cliente Con post</h3>
                <hr />
                <form method="post" action="recibe_datos.php">
                    <div class="form-group">
                        <label for="codigo">Codigo:</label>
                        <input id="codigo" class="form-control" type="text" name="codigo" />
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input id="nombres" class="form-control" type="text" name="nombres" />
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos" />
                    </div>
                    <div class="form-group">
                        <label for="Dui">Dui:</label>
                        <input id="Dui" class="form-control" type="text" name="Dui" />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" />
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input id="telefono" class="form-control" type="tel" name="telefono" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" class="form-control" type="tel" name="email" />
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>