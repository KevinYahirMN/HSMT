<?php

class suggestions_HR{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Puntuaciones bajas en HR, no existen suficientes 
                datos que permitan la interpretación adecuada, por lo que 
                dichas puntuaciones pueden interpretarse de dos formas, 
                ya que no se espera que presenten el síndrome de hostilidad 
                sobrecontrolada, esto es: o son personas crónicamente 
                agresivas o son individuos que expresan de manera bastante 
                apropiada sus sentimientos de agresión.";
            break;
            case $count > 64:
                $text = "Los individuos que obtienen puntuaciones altas 
                en la escala tienden a evitar la expresión abierta de la 
                agresión sin embargo a menudo en momentos de extrema 
                provocación, actúan de una manera muy violenta y pueden 
                reaccionar con conductas acting out. Las personas con 
                puntuaciones elevadas en HR, tienden a no expresar 
                sentimientos de cólera, ni siquiera de manera verbal; 
                son sociables y responsables y tienen una fuerte 
                necesidad de sobresalir ante los demás; no obstante, 
                son dependientes y confiados. Suelen describir a sus 
                familias de origen como cálidas y fuentes de apoyo.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>