<?php
//Se aregan los archivos de las escalas para poder utilizar sus clases
include('basicScales/basicScalesMale.php');
include('SupplementaryScales/supplementaryScalesMale.php');
include('ContentScales/contentScalesMale.php');
include('FactorK.php');

session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 31; $i++){
   array_push($answer, $postanswer[$i]);
}

//Declaración de variables
$cBasicMale = array(); //contador de puntaje para escala basica de hombres
$cSupplementaryMale = array(); //contador de puntaje para escala suplementaria de hombre
$cContentMale = array(); //contador de puntaje para escala de contenido de hombre

$basicScaleMale = new basicScalesMale();
$supplementaryScalesMale = new supplementaryScalesMale();
$contentScaleMale = new contentScalesMale();
$factorK = new FactorK();

array_push($cBasicMale, $basicScaleMale->scale_L($answer));
array_push($cBasicMale, $basicScaleMale->scale_F($answer));
array_push($cBasicMale, $basicScaleMale->scale_K($answer));
array_push($cBasicMale, $basicScaleMale->scale_Hs($answer));
array_push($cBasicMale, $basicScaleMale->scale_D($answer));
array_push($cBasicMale, $basicScaleMale->scale_Hi($answer));
array_push($cBasicMale, $basicScaleMale->scale_Dp($answer));
array_push($cBasicMale, $basicScaleMale->scale_Mf($answer));
array_push($cBasicMale, $basicScaleMale->scale_Pa($answer));
array_push($cBasicMale, $basicScaleMale->scale_Pt($answer));
array_push($cBasicMale, $basicScaleMale->scale_Es($answer));
array_push($cBasicMale, $basicScaleMale->scale_Ma($answer));
array_push($cBasicMale, $basicScaleMale->scale_Is($answer));

$cBasicMale[3] = $factorK->sum5K($cBasicMale[3], $cBasicMale[2]);
$cBasicMale[6] = $factorK->sum4K($cBasicMale[6], $cBasicMale[2]);
$cBasicMale[9] = $factorK->sumK($cBasicMale[9], $cBasicMale[2]);
$cBasicMale[10] = $factorK->sumK($cBasicMale[10], $cBasicMale[2]);
$cBasicMale[11] = $factorK->sum2K($cBasicMale[11], $cBasicMale[2]);

array_push($cSupplementaryMale, $supplementaryScalesMale->scale_A($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_R($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_Fyo($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_A_MAC($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_HR($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_Do($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_Rs($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_Dpr($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_GM($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_GF($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_EPK($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_EPS($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_ls1($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_ls2($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_ls3($answer));
array_push($cSupplementaryMale, $supplementaryScalesMale->scale_Fp($answer));

array_push($cContentMale, $contentScaleMale->scale_ANS($answer));
array_push($cContentMale, $contentScaleMale->scale_MIE($answer));
array_push($cContentMale, $contentScaleMale->scale_OBS($answer));
array_push($cContentMale, $contentScaleMale->scale_DEP($answer));
array_push($cContentMale, $contentScaleMale->scale_SAU($answer));
array_push($cContentMale, $contentScaleMale->scale_DEL($answer));
array_push($cContentMale, $contentScaleMale->scale_ENJ($answer));
array_push($cContentMale, $contentScaleMale->scale_CIN($answer));
array_push($cContentMale, $contentScaleMale->scale_PAS($answer));
array_push($cContentMale, $contentScaleMale->scale_PTA($answer));
array_push($cContentMale, $contentScaleMale->scale_BAE($answer));
array_push($cContentMale, $contentScaleMale->sclae_ISO($answer));
array_push($cContentMale, $contentScaleMale->scale_FAM($answer));
array_push($cContentMale, $contentScaleMale->scale_DTR($answer));
array_push($cContentMale, $contentScaleMale->scale_RTR($answer));

?>