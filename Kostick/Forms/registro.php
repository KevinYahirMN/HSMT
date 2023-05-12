<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="media/ico.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Alta de usuario</title>
	<style>
		.btn-group.respuestas {
			margin: 0 auto;
			display: block;
			width: 100%;
			text-align: center;
		}
		.btn-group.respuestas .btn {
			min-width: 100px;
		}
		.banterior:hover{
			cursor:pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					
				</div>
				<div class="col-4 text-center">
					<img src="media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
				<a href="registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					Alta de usuario
				</h4>
			</div>
			<div class="card-body">
              
			<form  id="userForm" method="post" action="tests.php">
					<div class="form-row">
					  <div class="form-group col-md-6">
						<label for="nombres">Nombre(s)</label>
						<input type="fname" class="form-control"  name="name1" id="name1" placeholder="Nombre(s)"
						 minlength="1" required pattern="[A-Za-zñ ]+"
						 title="No se permiten números">
					  </div>
					  <div class="form-group col-md-6">
						<label for="nombres">Apellido paterno</label>
						<input type="lname" class="form-control" name="name2" id="name2" placeholder="Apellido paterno"
						 minlength="1" required pattern="[A-Za-zñ ]+"
						 title="No se permiten números">
					  </div>
					  <div class="form-group col-md-6">
						<label for="nombres">Apellido materno</label>
						<input type="lname" class="form-control"name="name3" id="name3" placeholder="Apellido materno"
						 minlength="1" required pattern="[A-Za-zñ ]+"
						 title="No se permiten números">
					  </div>
					  <div class="form-group col-md-4" >
						<label for="Sexo">Sexo</label>
						<select id="gender" name="gender"class="form-control" required>
						  <option>Masculino</option>
						  <option>Femenino</option>
						</select>
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputAddress">Dirección</label>
					  <input type="text" name="inputAddress"class="form-control" id="inputAddress" placeholder="Colonia, calle, etc "
					   minlength="1" required pattern="[A-Za-zñ0 -9999999999 ]+"
					   title="No se permiten carácteres especiales"
					   >
					</div>
					<div class="form-group">
					  <label for="inputAddress2">Número de interior/exterior</label>
					  <input type="text" class="form-control"name="interior" id="interior" placeholder="Número de interior, número de exterior , etc"
					   minlength="1" required pattern="[A-Za -zñ0-999999999 ]+"
					   title="No se permiten carácteres especiales">
					</div>
					<div class="form-row">
					  <div class="form-group col-md-6">
						<label for="inputCity">Ciudad</label>
						<input type="text" name="city"class="form-control" id="city" placeholder="Ciudad"
						 minlength="1" required pattern="[A-Za-zñ ]+"
						 title="No se permiten números">
					  </div>
					  <div class="form-group col-md-4">
						<label for="inputState">Estado</label>
						<select id="inputState"name="inputState" class="form-control">
						  <option>Aguascalientes</option>
						  <option>Baja California</option>
						  <option>Baja California Sur</option>
						  <option>Campeche</option>
						  <option>Chiapas</option>
						  <option>Chihuahua</option>
						  <option>Coahuila</option>
						  <option>Colima</option>
						  <option>Distrito Federal</option>
						  <option>Durango</option>
						  <option>Guanajuato</option>
						  <option>Guerrero</option>
						  <option>Hidalgo</option>
						  <option>Jalisco</option>
						  <option>Ciudad de México</option>
						  <option>Michoacán</option>
						  <option>Morelos</option>
						  <option>Aguascalientes</option>
						  <option>Nayarit</option>
						  <option>Nuevo León</option>
						  <option>Oaxaca</option>
						  <option>Puebla</option>
						  <option>Querétaro</option>
						  <option>Quintana Roo</option>
						  <option>San Luis Potosí</option>
						  <option>Sinaloa</option>
						  <option>Sonora</option>
						  <option>Tabasco</option>
						  <option>Tamaulipas</option>
						  <option>Tlaxcala</option>
						  <option>Veracruz</option>
						  <option>Yucatán</option>
						  <option>Zacatecas</option>
						</select>
					  </div>
					  <div class="form-group col-md-2">
						<label for="inputZip">Código postal</label>
						<input type="text" name="zip"class="form-control" id="zip" placeholder="Código postal"
						 minlength="4" required pattern="[0-9999999999999999999999999999999]+"
						 title="Solo se permiten números">
					  </div>
					</div>
					<div class="form-group">
						<label for="inputZip">Fecha de nacimiento</label>
						<input type="date" id ="bday" name="bday" required pattern="\d{4}-\d{2}-\d{2}" id="nac_" />
                        <span class="validity"></span>
					</div>
					<center><div class="form-group col-md-4" >
						<label for="test">Seleccione examen a aplicar</label>
						<select id="test" name="test"class="form-control" required>
						  <option value="../../MMPI-2/Forms/MMPI-2/Form_1.php">MMPI-2</option>
						  <option value="../../Kostick/Forms/Form_1.php">Kostick</option>
						  <option value="../../SCID-II/Forms/Form_1.php">SCID-II</option>
						  <option value="../../OTIS/forms/Form_1.php">OTIS</option>
						</select>
					  </div><center>
					<center><button type="submit" name="button_submit"  id="button_submit" disabled="disabled"  class="btn btn-success">Continuar</button></center>
				  </form>
			<div class="wrapper">
        </div>  
			<br>
			</div>
			<div class="card-footer text-muted text-center">
			<b>	Rellene la siguiente información para continuar</b>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/function.js"></script>
</html>