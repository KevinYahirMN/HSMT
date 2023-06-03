<?php

class suggestions_Mf_Female{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Pasiva, sumisa, restringida, 
                dependencia, modestia.
                Buen control de impulsos.
                Facilidad de autocomprenderse y para obeservar 
                errores externos de sí misma.';
            break;
            case $count < 52:
                $text = 'Empatía.
                Conducta competente.
                Iniciativa.
                Actitud de consideración.
                Idealismo.';
            break;
            case $count < 60:
                $text = 'Actividad.
                Actitud aventurera.
                Espontaniedad.
                Asertividad.';
            break;
            case $count < 70:
                $text = 'Autoconfianza, equilibrio, 
                estabilidad, seguridad y vigor.
                Estilo lógico, poco emocional.
                Competitividad.';
            break;
            default:
                $text = 'Agresividad y deshinibidas.
                Rebeldía contra roles típicamente femeninos.
                Dominantes y dadas de acción.
                Poca dependencia.
                Poco amigables, torpes y varoniles.
                Suele intensificarse el significado si la escala 
                4 es también elevada.';
            break;
        }
        return $text;
    }
}

?>