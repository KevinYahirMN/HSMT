<?php
class Suggestions_G{
    function highPositive(){
        $text = "Se identifica con el trabajo 
        arduo comúnmente aparece como un 
        trabajador intenso y dedicado.";
        return $text;
    }

    function highNegative(){
        $text = "Es un trabajador arduo e intenso, una 
        persona que desgraciadamente trabaja 
        por el hecho de trabajar. Puede estar 
        más intrigado con los procesos de 
        trabajo que con los resultados.";
        return $text;
    }

    function lowPositive(){
        $text = "Probablemente este motivado por 
        encontrar métodos para ahorrar tiempo 
        al hacer las cosas.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Lo último que quisiera hacer es 
        identificarse con el trabajo arduo.";
        return $text;
    }
}
?>