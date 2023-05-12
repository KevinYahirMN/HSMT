<?php
session_start();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="../forms/media/ico.ico">
	<link rel="stylesheet" href="../forms/css/bootstrap.min.css">
	<link rel="stylesheet" href="../forms/css/font-awesome.min.css">
	<link rel="stylesheet" href="../forms/css/style.css">
  <link rel="stylesheet" href="Print.css">
	<title>Resultados</title>
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
					<img src="../forms/media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
        <a href="../forms/registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i id="exit_Button2" class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					<span class="badge badge-success">
						Interpretación de resultados
					</span>
				</h4>
			</div>
			<div class="card-body">
			<div class="col-md-12 text-center text-success"><h3><i class="fa fa-address-book-o"></i> Información personal</h3></div>
			<center><div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombres: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name1']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido paterno: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name2']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido materno: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name3']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Sexo: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['gender']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dirección: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['inputAddress']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Número de interior/exterior: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['interior']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ciudad: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['city']?></p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Estado: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['inputState']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Código postal: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['zip']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Fecha de nacimiento: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['bday']?> </p>
              </div>
            </div>
          </div>
        </div>
	</center>

<html>
<head>
<link rel="stylesheet" href="Table.css">
</head>
<body>
<br>
<hr>
    <table class="content-table">
    <div class="col-md-12 text-center text-success"><h3>RESULTADOS</h3></div>

    <thead>
          <tr>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
          </tr>
        </thead>
        <tbody>
        <tr>
    <td>1</td>
    <td></td>
    <td>16</td>
    <td></td>
    <td>31</td>
    <td></td>
    <td>46</td>
    <td></td>
    <td>61</td>
    <td></td>
       </tr>
       <tr>
    <td>2</td>
    <td></td>
    <td>17</td>
    <td></td>
    <td>32</td>
    <td></td>
    <td>47</td>
    <td></td>
    <td>62</td>
    <td></td>
       </tr>
       <tr>
    <td>3</td>
    <td></td>
    <td>18</td>
    <td></td>
    <td>33</td>
    <td></td>
    <td>48</td>
    <td></td>
    <td>63</td>
    <td></td>
       </tr>
       <tr>
    <td>4</td>
    <td></td>
    <td>19</td>
    <td></td>
    <td>34</td>
    <td></td>
    <td>49</td>
    <td></td>
    <td>64</td>
    <td></td>
       </tr>
       <tr>
    <td>5</td>
    <td></td>
    <td>20</td>
    <td></td>
    <td>35</td>
    <td></td>
    <td>50</td>
    <td></td>
    <td>65</td>
    <td></td>
       </tr>
       <tr>
    <td>6</td>
    <td></td>
    <td>21</td>
    <td></td>
    <td>36</td>
    <td></td>
    <td>51</td>
    <td></td>
    <td>66</td>
    <td></td>
       </tr>
       <tr>
    <td>7</td>
    <td></td>
    <td>22</td>
    <td></td>
    <td>37</td>
    <td></td>
    <td>52</td>
    <td></td>
    <td>67</td>
    <td></td>
       </tr>
       <tr>
    <td>8</td>
    <td></td>
    <td>23</td>
    <td></td>
    <td>38</td>
    <td></td>
    <td>53</td>
    <td></td>
    <td>68</td>
    <td></td>
       </tr>
       <tr>
    <td>9</td>
    <td></td>
    <td>24</td>
    <td></td>
    <td>39</td>
    <td></td>
    <td>54</td>
    <td></td>
    <td>69</td>
    <td></td>
    <tr>
    <td>10</td>
    <td></td>
    <td>25</td>
    <td></td>
    <td>40</td>
    <td></td>
    <td>55</td>
    <td></td>
    <td>70</td>
    <td></td>
    <tr>
    <td>11</td>
    <td></td>
    <td>26</td>
    <td></td>
    <td>41</td>
    <td></td>
    <td>56</td>
    <td></td>
    <td>71</td>
    <td></td>
       </tr>
       <tr>
    <td>12</td>
    <td></td>
    <td>27</td>
    <td></td>
    <td>42</td>
    <td></td>
    <td>57</td>
    <td></td>
    <td>72</td>
    <td></td>
       </tr>
       <tr>
    <td>13</td>
    <td></td>
    <td>28</td>
    <td></td>
    <td>43</td>
    <td></td>
    <td>58</td>
    <td></td>
    <td>73</td>
    <td></td>
       </tr>
       <tr>
    <td>14</td>
    <td></td>
    <td>29</td>
    <td></td>
    <td>44</td>
    <td></td>
    <td>59</td>
    <td></td>
    <td>74</td>
    <td></td>
       </tr>
       <tr>
    <td>15</td>
    <td></td>
    <td>30</td>
    <td></td>
    <td>45</td>
    <td></td>
    <td>60</td>
    <td></td>
    <td>75</td>
    <td></td>
       </tr>
        </tbody>
      </table>
</body>
</html>
					  <br><br>
					  <div class="text-center">
						<button style="background-color: #4CAF50; 
            color: white; 
            padding: 10px 20px; 
            border: none;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 4px; 
            cursor: pointer;"
            onclick="window.print();" id="print" class="print_Button">Imprimir</button>
					  </div>
				<br>
			</div>
			<div class="card-footer text-muted text-center">
			<Strong>Nota: </Strong>Este reporte no debe ser tomado textualmente pues presenta solo inferencias generales acerca del significado de la elevación de las puntuaciones que deben considerarse en cada caso de acuerdo con la historia y antecedentes del sujeto.
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../forms/js/function.js"></script>
</html>

<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>
