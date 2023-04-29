<?php
class Suggestions_A{
    function highPositive(){
        $text = "Es una persona ambiciosa, tiene 
        iniciativa con gran necesidad de 
        obtener logros. Fija estándares altos 
        para sí mismo y para los demás, le 
        gusta el trabajo con retos y tiene 
        deseos de ser el mejor.";
        return $text;
    }

    function highNegative(){
        $text = "Tiende a estar descontento porque fija 
        niveles de altura que nunca puede 
        alcanzar. Puede irritara otras personas 
        con sus expectaciones que usualmente 
        no son altas. El supervisor puede 
        encontrar dificultad para satisfacerlo. 
        Desea reconocimientos, aumentos y 
        promociones.";
        return $text;
    }

    function lowPositive(){
        $text = "Está contento y se distrae poco, a 
        menos que el empujen demasiado 
        fuerte. No siente impulso de avanzar.";
        return $text;
    }
    
    function lowNegative(){
        $text = "No tiene iniciativa propia. Tiene poco 
        empuje y avance. Se acomoda a ser el 
        segundo mejor en términos de lo que 
        realmente es capaz de hacer.";
        return $text;
    }
}
?>