<?php
class Suggestions_R{
    function highPositive(){
        $text = "Es un planeador a largo plazo. Esta 
        interesado en teoría y se refleja en su 
        actividad.";
        return $text;
    }

    function highNegative(){
        $text = "Es un soñador. Puede involucrarse tanto 
        en la teoría que puede no hacer mucho 
        en las situaciones prácticas y concretas.";
        return $text;
    }

    function lowPositive(){
        $text = "Es una persona que hace las cosas más 
        que un planeador teórico. Tiende a ser 
        práctico.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Noe está interesado en la teoría. No 
        puede planear suficiente y organizar las 
        tareas.";
        return $text;
    }
}
?>