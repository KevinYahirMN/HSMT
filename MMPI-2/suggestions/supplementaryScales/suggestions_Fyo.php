<?php

class suggestions_Fyo{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Las personas con puntajes bajos 
                tienden a presentar más 
                problemas y más severos que las 
                demás personas. Además tienen 
                pocos recursos psicológicos para 
                enfrentarse al estrés, por lo que su 
                pronóstico con relación al cambio 
                en psicoterapia, no es positivo.";
            break;
            case $count > 64:
                $text = "Tienden a estar más adaptados 
                psicológicamente y muestran más 
                habilidades para enfrentarse a los 
                problemas y situaciones 
                estresantes. 
                Tienden a ser más estables y 
                responsables en sus actividades, lo 
                cual los hace confiables ante los 
                demás; además son persistentes, 
                inteligentes, e independientes, por 
                lo que producen una primera 
                impresión favorable en quienes los 
                rodean. 
                Sin embargo, pueden llegar a ser 
                oportunistas y manipuladores para 
                lograr sus objetivos, debido a que 
                desarrollan fuertes intereses y se 
                muestran competitivos. 
                Asimismo, quizá sean hostiles y 
                rebeldes hacia la autoridad, 
                especialmente por su gran 
                confianza en sí mismos, de modo 
                que llegan a ser sarcásticos y 
                cínicos ante los demás. 
                Los hombres con puntuaciones 
                elevadas tienen un apropiado 
                estilo de conducta masculino.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>