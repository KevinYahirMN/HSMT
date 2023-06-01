<?php
class scaleCount{
    //sumatoria de respuesta verdadero
    function calif_True($answer){
        if($answer == 'true'){
            return 1;
        }
    }

    //Sumatoria de respuesta falso
    function calif_False($answer){
        if($answer == 'false'){
            return 1;
        }
    }
}
?>