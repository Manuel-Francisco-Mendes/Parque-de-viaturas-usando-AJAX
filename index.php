<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Viaturas</title>
    <script src="fileAjax.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Clientes</a></li>
                        <li><a href="Administrador.php">Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <p id="sucesso"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Clientes</b></h2>
                    </div>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
                        <input type="hidden" value="5" name="type">
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
                    </tr>
                </thead>
                <tbody>

                    <?php
				$result = mysqli_query($conn,"SELECT * FROM viaturas");/////////////////////////////////////////////////////////////////////////
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