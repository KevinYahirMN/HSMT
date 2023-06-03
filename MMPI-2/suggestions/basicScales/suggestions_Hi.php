<?php

class suggestions_Hi{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Probabilidad de actitud cínica.
                Poco interesado en las relaciones sociales, 
                conformista, tendencias de aislamiento 
                social.
                Gama de intereses restringida.
                Obstinado, poco amistoso y evita 
                situaciones donde él sea el líder.
                Conformista, con pocas metas.
                Poco preocupado por su salud, no manifiesta 
                síntomas somáticos.
                Frío, distante, realista, poco arriesgado.';
            break;
            case $count < 56:
                $text = 'Actitud realista.
                Apertura hacia los sentimientos.
                Estilo lógico y racional.';
            break;
            case $count < 66:
                $text = 'Actitud centrada en sí mismo, 
                superficialidad.
                Inmadurez y actitud manipuladora ocasional.
                Conformismo, moralismo.
                Necesidad de agradar, inseguridad.
                Actitud demostrativa y extravertida.';
            break;
            case $count < 76:
                $text = 'Predominio defensivo de negación y 
                disociación.
                Quejas y síntomas somáticos específicos.
                Ingenuidad, escasa capacidad de insight.
                Actitud exigente, demandante e histriónica.';
            break;
            default:
                $text = 'Alta sugestionabilidad.
                Tendencia a la preocupación.
                Utiliza técnicas manipuladoras, tortuosas 
                para obtener atención y simpatía.
                Episodios súbitos de ansiedad o pánico.
                Desinhibición, inseguridad, conducta 
                arrebatada e infantil.
                Aparición de síntomas físicos como reacción 
                a situaciones o actitudes vergonzantes.
                Manifiesta preocupación ante el fracaso 
                escolar o laboral aunque suelen ser muy 
                poco trabajador y con pocas 
                aspiraciones.
                Le cuesta comprender los orígenes de 
                su propio comportamiento.
                No manifiesta síntomas depresivos.
                Se involucran emocionalmente, son 
                amistosos y conversadores. Da más 
                de sí de acuerdo a sus intereses 
                personales.';
            break;
        }
        return $text;
    }
}

?>