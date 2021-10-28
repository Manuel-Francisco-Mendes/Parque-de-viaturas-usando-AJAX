<?php
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viaturas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ajax/ajax.js"></script>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Clientes</a></li>
                        <li class="active"><a href="Administrador.php">Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <p id="success"></p>
        <div class="campos">
            <div class="form-group">
                <label>MARCA</label>
                <input type="text" id="name" name="marca" class="form-control" required>
            </div>
            <div class="form-group">
                <label>MODELO</label>
                <input type="text" id="email" name="modelo" class="form-control" required>
            </div>
        </div>
        <div class="butoes">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-success" id="btn-add">Registar</button>
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Administrador</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>#</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Acção</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
				$result = mysqli_query($conn,"SELECT * FROM viaturas");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
                    <tr id="<?php echo $row["id"]; ?>">
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["marca"]; ?></td>
                        <td><?php echo $row["modelo"]; ?></td>
                        <td>
                        
                            <input type="button" class="btn btn-default" value="Editar">

                            <input type="button" class="btn btn-default"  value="Excluir">
                        </td>
                    </tr>
                    <?php
				$i++;
				}
				?>
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>