<?php
class basicScaleInterpretation{
    function valuesT($counter = array()){
        $i = 0;
        $suggestions = array();
        while($i < count($counter)){
            switch($i){
                case 0:
                    array_push($suggestions, $this->scale_L($counter[0]));
                break;
                case 1:
                    $counter[1] = $this->scale_F($counter[1]);
                break;
                case 2:
                    $counter[2] = $this->scale_K($counter[2]);
                break;
                case 3:
                    $counter[3] = $this->scale_Hs($counter[3]);
                break;
                case 4:
                    $counter[4] = $this->scale_D($counter[4]);
                break;
                case 5:
                    $counter[5] = $this->scale_Hi($counter[5]);
                break;
                case 6:
                    $counter[6] = $this->scale_Dp($counter[6]);
                break;
                case 7:
                    $counter[7] = $this->scale_Mf($counter[7]);
                break;
                case 8:
                    $counter[8] = $this->scale_Pa($counter[8]);
                break;
                case 9:
                    $counter[9] = $this->scale_Pt($counter[9]);
                break;
                case 10:
                    $counter[10] = $this->scale_Es($counter[10]);
                break;
                case 11:
                    $counter[11] = $this->scale_Ma($counter[11]);
                break;
                case 12:
                    $counter[12] = $this->scale_Is($counter[12]);
                break;
            }
            $i++;
        }
    }
    function scale_L($c){        
        switch($c){
            case $c < 50:
                $text = 'Presenta sinceridad, autocrítica, 
                confianza.\n
                Capacidad de liderazgo, seguridad, 
                independencia, espontaniedad, autonomia.\n
                Sarcástico, irónico, cínico.\n';
            break;
            case $c < 70:
                $text = 'Conforme con la imagen del sí.\n
                Conformismo social.\n
                Moralismo y rigidez.';
            break;
            default:
                $text = 'Estado confuncional.\n
                Escasa capacidad introspectiva.\n
                Resistencia a la evaluacion.\n
                Moralismo y rigidez excesivo.\n
                Estilo represivo.\n
                Baja tolerancia a la frustración, 
                estrés, presiones ciscunstanciales.\n
                Ingenuidad y falta de perspicacia.';
            break;
        }
        return $text;
    }

    function scale_F($c){
        switch($c){
            case $c < 50:
                $text = 'Libre de tensión.\n
                Respuestas razonables.\n
                Conformismo y conformidad social.\n
                Convencionalismo.\n
                Probabilidad de fingir para proyectar 
                una imagen aceptable.\n
                Negación de dificultades personales.\n
                Descarte de psicopatología severa.';
            break;
            case $c < 66:
                $text = 'Respuesta hacia un área de 
                conflicto particular.\n
                Posibilidad de ser una persona neurótica.\n
                Adaptabiliad y buen funcionamiento en aspectos 
                divergidos a las áreas de conflicto.';
            break;
            case $c < 80:
                $text = 'Rigidiz en convicciones morales,
                sociales y/o políticas.\n
                Trastorno neurótico o psicótico.\n
                Una vez descartado un trastorno psiquiátrico puede 
                tratarse de una persona oportunista, depresiva, 
                impaciente, insatisfecha, inestable y/o curiosa';
            break;
            case $c < 100:
                $text = 'Responder a todos los reactivos falso.\n
                Simulación o exageración de síntomas.\n
                Resistencia a la prueba.\n
                Falta de cooperación.\n
                Psicosis.';
            break;
            default:
                $text = 'Respuestas ejecutadas al azar o por 
                incapacidad para comprender la lectura. Puede 
                haber respondido verdadero o falso a todos los 
                reactivos.\n
                Simulación de enfermedad mental o exageración de 
                la misma.\n
                Paciente psiquiátrico seriamente perturbado.\n
                Inconformismo o resignación ante creencias y/o 
                costumbres políticas, sociales o religiosas';
            break;
        }
        return $text;
    }

    function scale_K($c){
        switch($c){
            case $c < 41:
                $text = 'Se respondió verdadero a la mayoría 
                de reactivos.\n
                Desorganización emocional, ingenuidad, 
                autocrítica, debilidad yoica.\n
                Pretende proyetar una imagen inaceptable de su 
                persona.
                Exageración de conflictos.\n
                Timidez, inhibición, incapacidad de relacionarse 
                con los demás.\n
                Sinero y torpe en sus relaciones, cínico o 
                incrédulo.\n
                Conformista.\n
                Abulia.\n
                Desconfianza, suspicacia de los demás.\n
                Dificultad para enfrentar los problemas o darles 
                solución.\n
                Confusión orgánica o psicótica.\n
                Niveles bajos de autoconocimiento y 
                autocomprensión.';
            break;
            case $c < 71:
                $text = 'Adaptación, sociabilidad, capacidad 
                intelectual alta.\n
                Indepencia, autoconfianza.\n
                Alto nivel de comunicación con el medio.\n
                Comprensión y solución de problemas de forma 
                independiente y razonable.\n
                Ingenio y versatilidad.\n
                Elevado control en sus relaciones 
                interpersonales.\n
                Pensamiento claro.\n
                Pocos síntomas de trastorno emocional.';
            break;
            default:
                $text = 'Posible negación de problemas 
                personales.\n
                Respondió falso a gran parte de los reactivos.\n
                Pretende dar una imagen de control y eficacia.\n
                Timidez, indecisión, inhibición.\n
                Falta de autonocomiento y autoentendimiento.\n
                Intolerancia a convicciones exrtañas o poco 
                convencionales.\n
                Baja probabilidad de conductas antisociales.';
            break;
        }
        return $text;
    }

    function scale_Hs($c){
        switch($c){
            case $c < 41:
                $text = 'No presenta quejas o preocupaciones 
                somáticas.\n
                Probabilidad de desatención a signos 
                síntomas de enfermedad.\n
                Optimismo, energía, satisfacción.\n
                Efectividad.';
            break;
            case $c < 56:
                $text = 'Escasa preocupación acerca del cuerpo y 
                la salud propia.\n
                Emotividad abierta y equilibrada.\n
                Realista y perspicaz.';
            break;
            case $c < 66:
                $text = 'Presencia de un trastorno de salud 
                específico.\n
                Probabilidad de inmadurez, irritabilidad, 
                tendencia a la queja y al lamento.\n
                Preocupación por la salud corporal propia 
                (peso, funcionamiento físico, entre otras).';
            break;
            case $c < 76:
                $text = 'Reacción exagerada a cualquier problema 
                real.\n
                Egoísmo, extremo centramiento en sí.\n
                Actitudes derrotistas y pesimistas.\n
                Amargura y perspectiva cínica.\n
                Demanda constante de atención.\n
                Exageración de los problemas físicos.\n
                Quejas intensas y temperamento mudable.';
            break;
            default:
                $text = 'Delirios somáticos o concernientes 
                al cuerpo.\n
                Múltiples síntomas y quejas, probablemente 
                constricción.';
            break;
        }
        return $text;
    }

    function scale_D($c){
        switch($c){
            case $c < 41:
                $text = 'Actividad, entusiasmo, optimismo.\n
                Sin disturbios emocionales, ni problemas de 
                inhibición o retracción social.\n
                Probabilidad de bajo control de los impulsos.\n
                Intereses sociales.';
            break;
            case $c < 56:
                $text = 'Conformidad, comodidad y adaptación 
                antes las relaciones sociales.\n
                Estabilidad emocional, autoconfianza, bajos 
                niveles de depresión y sentimientos de culpa.\n
                Relajación, comodidad, felicidad, energía y
                competividad.\n
                Energía elevada para afrontar los problemas 
                y encontrarles solución.\n
                Actitud realista.';
            break;
            case $c < 66:
                $text = 'Probabilidad de inhibición, 
                irritabilidad y timidez.\n
                Sentimientos relativamente crónicos de tristeza, 
                infelicidad, insatisfacción consigo mismo y con 
                los demás.\n
                Preocupación, pesimismo leve.\n
                Actitud responsable.\n
                Modestia.';
            break;
            case $c < 76:
                $text = 'Tendencia al aislamiento, timidez, 
                actitud vergonzante.\n
                Nivel energético disminuido, dificultades de 
                concentración.\n
                Quejas somáticas, trastornos del sueño.\n
                Baja autoestima, sentimientos de inadecuación.\n
                Presencia de aflicción, disforia y pesimismo.';
            break;
            default:
                $text = 'Ensimismamiento, introversión.\n
                Desesperanza, sentimientos de culpabilidad.\n
                Autopercepción de inadecuación.\n
                Preocupación acerca de la muerte; probabilidad 
                de ideación suicida.\n
                Apatía, abatimiento, enlentecimiento psicomotor.';
            break;
        }
        return $text;
    }

    function scale_Hi($c){
        switch($c){
            case $c < 41:
                $text = 'Probabilidad de actitud cínica.\n
                Poco interesado en las relaciones sociales, 
                conformista, tendencias de aislamiento 
                social.\n
                Gama de intereses restringida.\n
                Obstinado, poco amistoso y evita 
                situaciones donde él sea el líder.\n
                Conformista, con pocas metas.\n
                Poco preocupado por su salud, no manifiesta 
                síntomas somáticos.\n
                Frío, distante, realista, poco arriesgado.';
            break;
            case $c < 56:
                $text = 'Actitud realista.\n
                Apertura hacia los sentimientos.\n
                Estilo lógico y racional.';
            break;
            case $c < 66:
                $text = 'Actitud centrada en sí mismo, 
                superficialidad.\n
                Inmadurez y actitud manipuladora ocasional.\n
                Conformismo, moralismo.\n
                Necesidad de agradar, inseguridad.\n
                Actitud demostrativa y extravertida.';
            break;
            case $c < 76:
                $text = 'Predominio defensivo de negación y 
                disociación.\n
                Quejas y síntomas somáticos específicos.\n
                Ingenuidad, escasa capacidad de insight.\n
                Actitud exigente, demandante e histriónica.';
            break;
            default:
                $text = 'Alta sugestionabilidad.\n
                Tendencia a la preocupación.\n
                Utiliza técnicas manipuladoras, tortuosas 
                para obtener atención y simpatía.\n
                Episodios súbitos de ansiedad o pánico.\n
                Desinhibición, inseguridad, conducta 
                arrebatada e infantil.\n
                Aparición de síntomas físicos como reacción 
                a situaciones o actitudes vergonzantes.\n
                Manifiesta preocupación ante el fracaso 
                escolar o laboral aunque suelen ser muy 
                poco trabajador y con pocas 
                aspiraciones.\n
                Le cuesta comprender los orígenes de 
                su propio comportamiento.\n
                No manifiesta síntomas depresivos.\n
                Se involucran emocionalmente, son 
                amistosos y conversadores. Da más 
                de sí de acuerdo a sus intereses 
                personales.';
            break;
        }
        return $text;
    }

    function scale_Dp($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Mf($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Pa($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Pt($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Es($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Ma($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }

    function scale_Is($c){
        switch($c){
            case $c < 41:
                $text = '';
            break;
            case $c < 56:
                $text = '';
            break;
            case $c < 66:
                $text = '';
            break;
            case $c < 76:
                $text = '';
            break;
            default:
                $text = '';
            break;
        }
        return $text;
    }
}
?>