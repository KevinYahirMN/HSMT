 <?php

//Declaración de variables
//$c = array(); //contador de puntaje
$answer = $_POST['Q']; //Arreglo de respuestas
$c;
$c2;
include('basicScales/basicScalesMale.php');
include('basicScales/supplementaryScalesMale.php');

$basicScaleMale = new basicScalesMale();
$supplementaryScalesMale = new supplementaryScalesMale();

//$c = $basicScaleMale->scale_L('false');
$c = ($basicScaleMale->scale_L($answer));
/*$c.array_push($basicScaleMale->scale_F($answer));
$c.array_push($basicScaleMale->scale_K($answer));
$c.array_push($basicScaleMale->scale_Hs($answer));
$c.array_push($basicScaleMale->scale_D($answer));
$c.array_push($basicScaleMale->scale_Hi($answer));
$c.array_push($basicScaleMale->scale_Dp($answer));
$c.array_push($basicScaleMale->scale_Mf($answer));
$c.array_push($basicScaleMale->scale_Pa($answer));
$c.array_push($basicScaleMale->scale_Pt($answer));
$c.array_push($basicScaleMale->scale_Es($answer));
$c.array_push($basicScaleMale->scale_Ma($answer));
$c.array_push($basicScaleMale->scale_Ls($answer));
*/
echo $c;

//Codigo de escalas suplementarias - puesto a cambios
$c2 = ($supplementaryScaleMale->scale_A($answer));
echo $c2;
?>