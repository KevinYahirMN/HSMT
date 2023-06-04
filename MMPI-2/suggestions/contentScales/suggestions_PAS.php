<?php

class suggestions_PAS{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Puntajes elevados indican actitudes misantrópicas 
                similares a CIN, problemas de conducta durante los años 
                escolares y prácticas antisociales como robar o hurtar en 
                supermercados, lo que puede dar lugar a problemas con la ley. 
                Las personas que tienen puntuaciones altas en esta escala 
                manifiestan disfrutar con las artimañas de los criminales y 
                aunque no incurran en conducta ilegal, creen que no está 
                mal evitar el incumplimiento de la ley, son poco confiables 
                y deshonestos. 
                Tanto hombre y mujeres fueron descritos por sus parejas como 
                personas que habían incurrido en prácticas antisociales. 
                Los varones fueron descritos como muy demandantes, inmaduros, 
                abusaban de substancias y habían tenido problemas con la ley. 
                Las mujeres fueron descritas como mentirosas, amenazantes con 
                quienes discreparan de sus opiniones, poco constructivas, no 
                dispuestas a recibir ayuda y con poca claridad de juicio. 
                En selección de personal se tiene que tomar en cuenta que 
                las personas con puntuaciones altas se les consideran no 
                confiables y tienen dificultades para aceptar reglas, 
                aun cuando no esté elevada, pero sea un pico del perfil.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;          
        }
        return $text;
    }
}

?>