<?php
include('../../Scales/Connection.php');

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


$print;
$con = new Connection();
/////////////////////////////////////////////////////
$answers = $con->scoreBasicScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";

$answers = $con->interpretationBasicScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";

echo $answers = $con->interpretationAditional()."<br>";

////////////////////////////////////////////////////
$answers = $con->scoreContentScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";

$answers = $con->interpretationContentScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";
////////////////////////////////////////////////////
$answers = $con->scoreSupplementaryScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";

$answers = $con->interpretationSupplementaryScales();

foreach ($answers as $key => $value){
    echo $value."<br>";
}
echo "<br>";
//////////////////////////////////////////////////////
?>