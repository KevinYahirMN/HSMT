<?php

class suggestions_Es{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Convencionalismo, conservadurismo.
                Control sobre los propios impulsos.
                Actitud sumisa, dependencia, sensibilidad, 
                bondad, responsabilidad, poca imaginación.';
            break;
            case $count < 56:
                $text = 'Adaptabilidad.
                Confiabilidad, seguridad.
                Equilibrio emocional.';
            break;
            case $count < 66:
                $text = 'Escaso interés por las personas.
                Poca habilidad práctica.
                Creatividad e imaginación.
                Preocupaciones religiosas o espirituales.';
            break;
            case $count < 76:
                $text = 'Creencias inusuales.
                Actos bizarros.
                Problemas de identificación y autoconfianza.
                Dificultades de concentración y razonamiento.';
            break;
            default:
                $text = 'Disturbios del pensamiento.
                Comportamiento excéntrico.
                Probabilidad de delirios (somáticos, de 
                persecución, entre otros).
                Probabilidad de alucinaciones.
                Retraimiento social, aislamiento.
                Confusión, desorganización y desorientación.
                Objetivos indeterminados, inalcanzables o 
                exagerados.
                Ansiedad generalizada y con aguda agitación 
                psicológica.
                Presenta apatía, impulsividad, hostilidad, 
                desordenamiento, resentimiento, incomprensión, 
                inadaptación, excentricidad, nerviosismo, 
                prolijidad.
                Contacto con la realidad deficitario.';
            break;
        }
        return $text;
    }
}

?>