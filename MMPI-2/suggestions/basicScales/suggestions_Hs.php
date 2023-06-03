<?php

class suggestions_Hs{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'No presenta quejas o preocupaciones 
                somáticas.
                Probabilidad de desatención a signos 
                síntomas de enfermedad.
                Optimismo, energía, satisfacción.
                Efectividad.';
            break;
            case $count < 56:
                $text = 'Escasa preocupación acerca del cuerpo y 
                la salud propia.
                Emotividad abierta y equilibrada.
                Realista y perspicaz.';
            break;
            case $count < 66:
                $text = 'Presencia de un trastorno de salud 
                específico.
                Probabilidad de inmadurez, irritabilidad, 
                tendencia a la queja y al lamento.
                Preocupación por la salud corporal propia 
                (peso, funcionamiento físico, entre otras).';
            break;
            case $count < 76:
                $text = 'Reacción exagerada a cualquier problema 
                real.
                Egoísmo, extremo centramiento en sí.
                Actitudes derrotistas y pesimistas.
                Amargura y perspectiva cínica.
                Demanda constante de atención.
                Exageración de los problemas físicos.
                Quejas intensas y temperamento mudable.';
            break;
            default:
                $text = 'Delirios somáticos o concernientes 
                al cuerpo.
                Múltiples síntomas y quejas, probablemente 
                constricción.';
            break;
        }
        return $text;
    }
}

?>