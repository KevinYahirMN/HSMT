<?php
include("../../Scales/Connection.php");

session_start();
$_SESSION['gender'] = 'Masculino';
$_SESSION['answer'] = array();

for($i = 0; $i < 568; $i++){
    if($i%2 != 0){
        array_push($_SESSION['answer'], 'true');
    }else{
        array_push($_SESSION['answer'], 'false');
    }
}

$conexion = new Connection();
$AnsB = $conexion->scoreBasicScales();
$AnsIB = $conexion->interpretationBasicScales();
$AnsIBA = $conexion->interpretationAditional();
$AnsC = $conexion->scoreContentScales();
$AnsIC = $conexion->interpretationContentScales();
$AnsS = $conexion->scoreSupplementaryScales();
$AnsIS = $conexion->interpretationSupplementaryScales();

for ($i = 0; $i < 13; ++$i)
{                 
    $html = $AnsIB[$i];
    print $html;
}

for ($i = 0; $i < 15; ++$i)
{                 
    $html = $AnsIC[$i];
    print $html;
}

for ($i = 0; $i < 15; ++$i)
{                 
    $html = $AnsIC[$i];
    print $html;
}

?>
?>

<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head><link rel="stylesheet" Type= "text/css" href="BasicsCSS.php">  
    <title>       
        Resultados
    </title>
</head>
<body>
    <div class="board">
        <div class="titulo_grafica">
            
            <h3 class="t_grafica">Escalas basicas</h3>
        </div>
        <div class="sub_board">
            <div class="sep_board"></div>
            <div class="cont_board">
                <div class="graf_board">
                    <div class="barra">
                        <div class="sub_barra b1">
                            <div class="tag_g"><?php echo $AnsB[0]; ?></div>
                            <div class="tag_leyenda">L</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b2">
                            <div class="tag_g"><?php echo $AnsB[1]; ?></div>
                            <div class="tag_leyenda">F</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b3">
                            <div class="tag_g"><?php echo $AnsB[2]; ?></div>
                            <div class="tag_leyenda">K</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b4">
                            <div class="tag_g"><?php echo $AnsB[3]; ?></div>
                            <div class="tag_leyenda">Hs</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b5">
                            <div class="tag_g"><?php echo $AnsB[4]; ?></div>
                            <div class="tag_leyenda">D</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b6">
                            <div class="tag_g"><?php echo $AnsB[5]; ?></div>
                            <div class="tag_leyenda">Hi</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b7">
                            <div class="tag_g"><?php echo $AnsB[6]; ?></div>
                            <div class="tag_leyenda">Dp</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b8">
                            <div class="tag_g"><?php echo $AnsB[7]; ?></div>
                            <div class="tag_leyenda">MfM</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b9">
                            <div class="tag_g"><?php echo $AnsB[8]; ?></div>
                            <div class="tag_leyenda">Pa</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b10">
                            <div class="tag_g"><?php echo $AnsB[9]; ?></div>
                            <div class="tag_leyenda">Pt</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b11">
                            <div class="tag_g"><?php echo $AnsB[10]; ?></div>
                            <div class="tag_leyenda">Es</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b12">
                            <div class="tag_g"><?php echo $AnsB[11]; ?></div>
                            <div class="tag_leyenda">Ma</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b13">
                            <div class="tag_g"><?php echo $AnsB[12]; ?></div>
                            <div class="tag_leyenda">Is</div>
                        </div>
                    </div>
                </div>
                <div class="tag_board">
                    <div class="sub_tag_board">
                        <div>100</div>
                        <div>90</div>
                        <div>80</div>
                        <div>70</div>
                        <div>60</div>
                        <div>50</div>
                        <div>40</div>
                        <div>30</div>
                        <div>20</div>
                        <div>10</div>
                    </div>
                </div>
           </div> 
            <div class="sep_board"></div>
       </div>    
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head><link rel="stylesheet" Type= "text/css" href="ContentCSS.php">  
    <title>       
        Resultados
    </title>
</head>
<body>
    <div class="board">
        <div class="titulo_grafica">
            
            <h3 class="t_grafica">Escalas de contenido</h3>
        </div>
        <div class="sub_board">
            <div class="sep_board"></div>
            <div class="cont_board">
                <div class="graf_board">
                    <div class="barra">
                        <div class="sub_barra b1">
                            <div class="tag_g"><?php echo $AnsC[0]; ?></div>
                            <div class="tag_leyenda">ANS</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b2">
                            <div class="tag_g"><?php echo $AnsC[1]; ?></div>
                            <div class="tag_leyenda">MIE</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b3">
                            <div class="tag_g"><?php echo $AnsC[2]; ?></div>
                            <div class="tag_leyenda">OBS</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b4">
                            <div class="tag_g"><?php echo $AnsC[3]; ?></div>
                            <div class="tag_leyenda">DEP</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b5">
                            <div class="tag_g"><?php echo $AnsC[4]; ?></div>
                            <div class="tag_leyenda">SAU</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b6">
                            <div class="tag_g"><?php echo $AnsC[5]; ?></div>
                            <div class="tag_leyenda">DEL</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b7">
                            <div class="tag_g"><?php echo $AnsC[6]; ?></div>
                            <div class="tag_leyenda">ENJ</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b8">
                            <div class="tag_g"><?php echo $AnsC[7]; ?></div>
                            <div class="tag_leyenda">CIN</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b9">
                            <div class="tag_g"><?php echo $AnsC[8]; ?></div>
                            <div class="tag_leyenda">PAS</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b10">
                            <div class="tag_g"><?php echo $AnsC[9]; ?></div>
                            <div class="tag_leyenda">PTA</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b11">
                            <div class="tag_g"><?php echo $AnsC[10]; ?></div>
                            <div class="tag_leyenda">BAE</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b12">
                            <div class="tag_g"><?php echo $AnsC[11]; ?></div>
                            <div class="tag_leyenda">ISO</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b13">
                            <div class="tag_g"><?php echo $AnsC[12]; ?></div>
                            <div class="tag_leyenda">FAM</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b14">
                            <div class="tag_g"><?php echo $AnsC[13]; ?></div>
                            <div class="tag_leyenda">DTR</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b15">
                            <div class="tag_g"><?php echo $AnsC[14]; ?></div>
                            <div class="tag_leyenda">RTR</div>
                        </div>
                    </div>
                </div>
                <div class="tag_board">
                    <div class="sub_tag_board">
                        <div>100</div>
                        <div>90</div>
                        <div>80</div>
                        <div>70</div>
                        <div>60</div>
                        <div>50</div>
                        <div>40</div>
                        <div>30</div>
                        <div>20</div>
                        <div>10</div>
                    </div>
                </div>
           </div> 
            <div class="sep_board"></div>
       </div>    
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head><link rel="stylesheet" Type= "text/css" href="SuplementaryCSS.php">  
    <title>       
        Resultados
    </title>
</head>
<body>
    <div class="board">
        <div class="titulo_grafica">
            
            <h3 class="t_grafica">Escalas suplementarias</h3>
        </div>
        <div class="sub_board">
            <div class="sep_board"></div>
            <div class="cont_board">
                <div class="graf_board">
                    <div class="barra">
                        <div class="sub_barra b1">
                            <div class="tag_g"><?php echo $AnsS[0]; ?></div>
                            <div class="tag_leyenda">A</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b2">
                            <div class="tag_g"><?php echo $AnsS[1]; ?></div>
                            <div class="tag_leyenda">R</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b3">
                            <div class="tag_g"><?php echo $AnsS[2]; ?></div>
                            <div class="tag_leyenda">Fyo</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b4">
                            <div class="tag_g"><?php echo $AnsS[3]; ?></div>
                            <div class="tag_leyenda">A-MAC</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b5">
                            <div class="tag_g"><?php echo $AnsS[4]; ?></div>
                            <div class="tag_leyenda">HR</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b6">
                            <div class="tag_g"><?php echo $AnsS[5]; ?></div>
                            <div class="tag_leyenda">Do</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b7">
                            <div class="tag_g"><?php echo $AnsS[6]; ?></div>
                            <div class="tag_leyenda">Rs</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b8">
                            <div class="tag_g"><?php echo $AnsS[7]; ?></div>
                            <div class="tag_leyenda">Dpr</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b9">
                            <div class="tag_g"><?php echo $AnsS[8]; ?></div>
                            <div class="tag_leyenda">GM</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b10">
                            <div class="tag_g"><?php echo $AnsS[9]; ?></div>
                            <div class="tag_leyenda">GF</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b11">
                            <div class="tag_g"><?php echo $AnsS[10]; ?></div>
                            <div class="tag_leyenda">EPK</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b12">
                            <div class="tag_g"><?php echo $AnsS[11]; ?></div>
                            <div class="tag_leyenda">EPS</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b13">
                            <div class="tag_g"><?php echo $AnsS[12]; ?></div>
                            <div class="tag_leyenda">ls1</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b14">
                            <div class="tag_g"><?php echo $AnsS[13]; ?></div>
                            <div class="tag_leyenda">ls2</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b15">
                            <div class="tag_g"><?php echo $AnsS[14]; ?></div>
                            <div class="tag_leyenda">ls3</div>
                        </div>
                    </div>
                    <div class="barra">
                        <div class="sub_barra b16">
                            <div class="tag_g"><?php echo $AnsS[15]; ?></div>
                            <div class="tag_leyenda">Fp</div>
                        </div>
                    </div>
                </div>
                <div class="tag_board">
                    <div class="sub_tag_board">
                        <div>120</div>
                        <div>110</div>
                        <div>100</div>
                        <div>90</div>
                        <div>80</div>
                        <div>70</div>
                        <div>60</div>
                        <div>50</div>
                        <div>40</div>
                        <div>30</div>
                        <div>20</div>
                        <div>10</div>
                    </div>
                </div>
           </div> 
            <div class="sep_board"></div>
       </div>    
    </div>
</body>
</html>
<?php
?>
<?php
?>