<?php
include('../Interfaces/ISuggestions.php');
class Suggestions_N implements ISuggestions{
    function highPositive(){
        $text = "La puntuación de N alta 
        representa el fuerte deseo del examinado 
        para terminar el trabajo. Es confiable 
        porque tiene un fuerte compromiso de 
        terminar el trabajo que empieza. Con 
        frecuencia prefiere un trabajo a la vez 
        que dejar u trabajo sin terminar ya que 
        le produce insatisfacción.";
        return $text;
    }

    function highNegative(){
        $text = "Tiene la mente en una sola dirección. 
        Tiene poca visión y tiende a ser obstindo 
        en sus convicciones. Ya sea eficiente o 
        no, tiene dificultad en deshacerse de lo 
        que esta haciendo. El de puntuación alta 
        (9), tiene el apremio de terminar lo que 
        inicia y puede repasar las posibles 
        salidas.";
        return $text;
    }

    function lowPositive(){
        $text = "Puede manejar muchos trabajos a la 
        vez. Al delegar, no involucra la 
        obtención de un ego de personalidad 
        en la tarea.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiende a no terminar lo que empieza, 
        tiene poco compromiso de la tarea 
        encomendada. Posiblemente sea un 
        buen “auxiliar de trabajo” y puede 
        distraerse con facilidad.";
        return $text;
    }
}
?>