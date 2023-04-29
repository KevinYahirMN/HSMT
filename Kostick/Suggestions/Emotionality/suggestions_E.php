<?php
class Suggestions_E{
    function highPositive(){
        $text = "Es confiable, constante, calmado y 
        tiene control emocional y madurez. 
        Probablemente es maneja bien en 
        situaciones emocionales.";
        return $text;
    }

    function highNegative(){
        $text = "Es tan calmado y controlado que puede 
        parecer como emocionalmente pasivo, 
        aburrido y sin influencia.";
        return $text;
    }

    function lowPositive(){
        $text = "Es dramático y aporta mucha energía 
        cuando trabaja. Se siente 
        emocionalmente involucrado en su 
        trabajo.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiene poca restricción emocional. 
        Cambia de estados de ánimo fácilmente. 
        Cambia su actitud con su estado de 
        ánimo.";
        return $text;
    }
}
?>