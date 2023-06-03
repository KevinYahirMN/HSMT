<?php

class suggestions_Mf_Male{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Patrón tradicional de intereses 
                masculinos.
                Pocos intereses, temerarios, 
                descuidados, toscos, poca 
                originalidad, agresivos.
                Orientado a la acción.
                Si la escala 4 es elevada, puede reflejar 
                un estereotipo de machismo prominente.';
            break;
            case $count < 56:
                $text = 'Sentido práctico.
                Actitud realista.
                Convencionalismo.
                Iniciativa.';
            break;
            case $count < 66:
                $text = 'Control del sí.
                Expresividad demostrativa.
                Sentido común.
                Intereses hacia el arte, la estética y la 
                belleza.
                Tacto y sensibilidad social.';
            break;
            case $count < 76:
                $text = 'Curiosidad y creatividad.
                Actitud de tolerancia.
                Ambicioso, constante en sus metas, 
                competitivo, individualismo.
                Intereses intelectuales.
                Empatía.';
            break;
            default:
                $text = 'Suave, extremadamente pasivo y 
                sumiso.
                Homosexualidad manifiesta o reprimida.
                Posibilidad de conflictos de identidad sexual 
                mayor.';
            break;
        }
        return $text;
    }
}

?>