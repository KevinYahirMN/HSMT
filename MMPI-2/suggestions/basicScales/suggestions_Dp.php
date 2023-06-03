<?php

class suggestions_Dp{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Rigidez, convencionalismo.
                Pasividad, escasa asertividad, con bajas 
                expectativas.
                Sumisión ante reglas y normas sociales o 
                legales.
                Falta de creatividad y espontaniedad.
                Moralista, conformista, reservado, 
                autocrítico.
                Sobrecontrol.';
            break;
            case $count < 56:
                $text = 'Sinceridad, actitud confiable, 
                confianza hacia los demás.
                Persistencia, responsabilidad.';
            break;
            case $count < 66:
                $text = 'Impulsividad.
                Conducta intrépida y aventurera.
                Actitud hedonista.
                Resentimiento, inestabilidad, impaciencia.
                Sociabilidad.
                Seguridad y asertividad.
                Probable creatividad e imaginación.';
            break;
            case $count < 76:
                $text = 'Baja tolerancia al aburrimiento, al 
                tedio y a la frustración.
                Problemas con la autoridad.
                Problemas laborales o matrimoniales 
                recurrentes.
                Actitud rebelde y hostil, rechazo por las normas 
                sociales y legales.
                Reacciones emocionales superficiales y de corta 
                duración (vergüenza, culpa).
                Probabilidad de abuso de sustancias.
                Antecedentes laborales o escolares de logro 
                reducido.
                Relaciones y respuestas emocionales 
                superficiales.';
            break;
            default:
                $text = 'Pobreza en la adecuación del juicio.
                Inestabilidad, irresponsabilidad.
                Delegan responsabilidades de sus actos a otros.
                Actitud centrada en sí mismo, inmadurez.
                Actitudes y comportamientos antisociales.
                Agresividad, provocación.';
            break;
        }
        return $text;
    }
}

?>