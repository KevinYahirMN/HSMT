<?php
include("../collector/collectorCount.php");
include("../collector/collectorDx.php");
include("../collector/collectorIQ.php");
include("../collector/collectorRange.php");
session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;

$CollectorCount = new collectorCount();
$CollectorDx = new collectorDx();
$CollectorIQ = new collectorIQ();
$CollectorRange = new collectorRange();

$collect = $CollectorCount->collect($temp);
$IQ = $CollectorIQ->collect($collect);
$Range = $CollectorRange->collect($IQ);
$Dx = $CollectorDx->collect($IQ);
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
  <link rel="stylesheet" href="table.css">

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
					<span id="badge" class="badge badge-success">
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
    <td><?php echo $temp[0];?></td>
    <td>16</td>
    <td><?php echo $temp[15];?></td>
    <td>31</td>
    <td><?php echo $temp[30];?></td>
    <td>46</td>
    <td><?php echo $temp[45];?></td>
    <td>61</td>
    <td><?php echo $temp[60];?></td>
       </tr>
       <tr>
    <td>2</td>
    <td><?php echo $temp[1];?></td>
    <td>17</td>
    <td><?php echo $temp[16];?></td>
    <td>32</td>
    <td><?php echo $temp[31];?></td>
    <td>47</td>
    <td><?php echo $temp[46];?></td>
    <td>62</td>
    <td><?php echo $temp[61];?></td>
       </tr>
       <tr>
    <td>3</td>
    <td><?php echo $temp[2];?></td>
    <td>18</td>
    <td><?php echo $temp[17];?></td>
    <td>33</td>
    <td><?php echo $temp[32];?></td>
    <td>48</td>
    <td><?php echo $temp[47];?></td>
    <td>63</td>
    <td><?php echo $temp[62];?></td>
       </tr>
       <tr>
    <td>4</td>
    <td><?php echo $temp[3];?></td>
    <td>19</td>
    <td><?php echo $temp[18];?></td>
    <td>34</td>
    <td><?php echo $temp[33];?></td>
    <td>49</td>
    <td><?php echo $temp[48];?></td>
    <td>64</td>
    <td><?php echo $temp[63];?></td>
       </tr>
       <tr>
    <td>5</td>
    <td><?php echo $temp[4];?></td>
    <td>20</td>
    <td><?php echo $temp[19];?></td>
    <td>35</td>
    <td><?php echo $temp[34];?></td>
    <td>50</td>
    <td><?php echo $temp[49];?></td>
    <td>65</td>
    <td><?php echo $temp[64];?></td>
       </tr>
       <tr>
    <td>6</td>
    <td><?php echo $temp[5];?></td>
    <td>21</td>
    <td><?php echo $temp[20];?></td>
    <td>36</td>
    <td><?php echo $temp[35];?></td>
    <td>51</td>
    <td><?php echo $temp[50];?></td>
    <td>66</td>
    <td><?php echo $temp[65];?></td>
       </tr>
       <tr>
    <td>7</td>
    <td><?php echo $temp[6];?></td>
    <td>22</td>
    <td><?php echo $temp[21];?></td>
    <td>37</td>
    <td><?php echo $temp[36];?></td>
    <td>52</td>
    <td><?php echo $temp[51];?></td>
    <td>67</td>
    <td><?php echo $temp[66];?></td>
       </tr>
       <tr>
    <td>8</td>
    <td><?php echo $temp[7];?></td>
    <td>23</td>
    <td><?php echo $temp[22];?></td>
    <td>38</td>
    <td><?php echo $temp[37];?></td>
    <td>53</td>
    <td><?php echo $temp[52];?></td>
    <td>68</td>
    <td><?php echo $temp[67];?></td>
       </tr>
       <tr>
    <td>9</td>
    <td><?php echo $temp[8];?></td>
    <td>24</td>
    <td><?php echo $temp[23];?></td>
    <td>39</td>
    <td><?php echo $temp[38];?></td>
    <td>54</td>
    <td><?php echo $temp[53];?></td>
    <td>69</td>
    <td><?php echo $temp[68];?></td>
    <tr>
    <td>10</td>
    <td><?php echo $temp[9];?></td>
    <td>25</td>
    <td><?php echo $temp[24];?></td>
    <td>40</td>
    <td><?php echo $temp[39];?></td>
    <td>55</td>
    <td><?php echo $temp[54];?></td>
    <td>70</td>
    <td><?php echo $temp[69];?></td>
    <tr>
    <td>11</td>
    <td><?php echo $temp[10];?></td>
    <td>26</td>
    <td><?php echo $temp[25];?></td>
    <td>41</td>
    <td><?php echo $temp[40];?></td>
    <td>56</td>
    <td><?php echo $temp[55];?></td>
    <td>71</td>
    <td><?php echo $temp[70];?></td>
       </tr>
       <tr>
    <td>12</td>
    <td><?php echo $temp[11];?></td>
    <td>27</td>
    <td><?php echo $temp[26];?></td>
    <td>42</td>
    <td><?php echo $temp[41];?></td>
    <td>57</td>
    <td><?php echo $temp[56];?></td>
    <td>72</td>
    <td><?php echo $temp[71];?></td>
       </tr>
       <tr>
    <td>13</td>
    <td><?php echo $temp[12];?></td>
    <td>28</td>
    <td><?php echo $temp[27];?></td>
    <td>43</td>
    <td><?php echo $temp[42];?></td>
    <td>58</td>
    <td><?php echo $temp[57];?></td>
    <td>73</td>
    <td><?php echo $temp[72];?></td>
       </tr>
       <tr>
    <td>14</td>
    <td><?php echo $temp[13];?></td>
    <td>29</td>
    <td><?php echo $temp[28];?></td>
    <td>44</td>
    <td><?php echo $temp[43];?></td>
    <td>59</td>
    <td><?php echo $temp[58];?></td>
    <td>74</td>
    <td><?php echo $temp[73];?></td>
       </tr>
       <tr>
    <td>15</td>
    <td><?php echo $temp[14];?></td>
    <td>30</td>
    <td><?php echo $temp[29];?></td>
    <td>45</td>
    <td><?php echo $temp[44];?></td>
    <td>60</td>
    <td><?php echo $temp[59];?></td>
    <td>75</td>
    <td><?php echo $temp[74];?></td>
       </tr>
        </tbody>
      </table>
      <br>
      <table class="content-table">
        <thead>
          <tr>
            <th>Puntuación Directa (PD)</th>
            <th>Coeficiente Intelectual</th>
            <th>Rango</th>
            <th>Dx</th>
          </tr>
        </thead>
        <tbody>
        <tr>
     <td><?php echo $collect;?></td>
     <td><?php echo $IQ;?></td>
     <td><?php echo $Range;?></td>
     <td><?php echo $Dx;?></td>
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
			<div id="footer" class="card-footer text-muted text-center">
			<Strong>Nota: </Strong>Este reporte no debe ser tomado textualmente pues presenta solo inferencias generales acerca del significado de la elevación de las puntuaciones que deben considerarse en cada caso de acuerdo con la historia y antecedentes del sujeto.
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../forms/js/function.js"></script>
</html>

<?php
/*$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
*/
?>
