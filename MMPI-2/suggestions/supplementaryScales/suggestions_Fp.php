<?php

class suggestions_Fp{
    
    function suggestions($count){        
        switch($count){
            case $count < 89:
                $text = "Si tanto la F como la Fp están 
                debajo de 89 se puede interpretar 
                todas las escalas, las básicas, las de 
                contenido y las suplementarias.";
            break;
            case $count > 90:
                $text = "Puntuacion cuestionable
                No se deben interpretar las 
                escalas de contenido y las 
                suplementarias.";
            break;
            case 110: $text ="Utilidad del perfil invalida
            Posible patologia, si otras
            escalas relacionadas son validas.
            Si la F es valida pero la Fp no, solo se
            podrá interpretar las escalas basicas, 
            pero no las suplementarias.";
            break;
            case $count > 110:
                $text = "Puntuacion invalida
                Si la F y la Fp están arriba de
                110, la prueba no es valida y
                NO se interpreta.";
            break;
        }
        return $text;
    }
}

?>