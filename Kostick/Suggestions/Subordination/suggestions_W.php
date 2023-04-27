<?php
class Suggestions_W implements ISuggestions{
    function highPositive(){
        $text = "Es una persona que tiene gran respeto 
        por las reglas. Puede seguir lo que se 
        le indica sin distorsionarlo.";
        return $text;
    }

    function highNegative(){
        $text = "No le agradan las reglas o tiene conflicto 
        con ellas. No es autónomo.";
        return $text;
    }

    function lowPositive(){
        $text = "Es autónomo. Esta dirigido hacia las 
        metas mas que orientado al trabajo. 
        Quiere saber qué debe hacerse, no 
        cómo debe hacerse.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiene dificultad en seguir las reglas 
        exactamente en la forma en que están 
        establecidas. Le gusta ir y venir a su 
        antojo.";
        return $text;
    }
}
?>