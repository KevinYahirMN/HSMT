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
                    array_push($suggestions, $this->scale_F($counter[1]));
                break;
                case 2:
                    array_push($suggestions, $this->scale_K($counter[2]));
                break;
                case 3:
                    array_push($suggestions, $this->scale_Hs($counter[3]));
                break;
                case 4:
                    array_push($suggestions, $this->scale_D($counter[4]));
                break;
                case 5:
                    array_push($suggestions, $this->scale_Hi($counter[5]));
                break;
                case 6:
                    array_push($suggestions, $this->scale_Dp($counter[6]));
                break;
                case 7:
                    array_push($suggestions, $this->scale_MfM($counter[7]));
                break;
                case 8:
                    array_push($suggestions, $this->scale_Pa($counter[8]));
                break;
                case 9:
                    array_push($suggestions, $this->scale_Pt($counter[9]));
                break;
                case 10:
                    array_push($suggestions, $this->scale_Es($counter[10]));
                break;
                case 11:
                    array_push($suggestions, $this->scale_Ma($counter[11]));
                break;
                case 12:
                    array_push($suggestions, $this->scale_Is($counter[12]));
                break;
            }
            $i++;
        }
        return $suggestions;
    }
    
    function scale_L($c){        
        switch($c){
            case $c < 50:
                $text = 'Presenta sinceridad, autocrítica, 
                confianza.
                Capacidad de liderazgo, seguridad, 
                independencia, espontaniedad, autonomia.
                Sarcástico, irónico, cínico.';
            break;
            case $c < 70:
                $text = 'Conforme con la imagen del sí.
                Conformismo social.
                Moralismo y rigidez.';
            break;
            default:
                $text = 'Estado confuncional.
                Escasa capacidad introspectiva.
                Resistencia a la evaluacion.
                Moralismo y rigidez excesivo.
                Estilo represivo.
                Baja tolerancia a la frustración, 
                estrés, presiones ciscunstanciales.
                Ingenuidad y falta de perspicacia.';
            break;
        }
        return $text;
    }

    function scale_F($c){
        switch($c){
            case $c < 50:
                $text = 'Libre de tensión.
                Respuestas razonables.
                Conformismo y conformidad social.
                Convencionalismo.
                Probabilidad de fingir para proyectar 
                una imagen aceptable.
                Negación de dificultades personales.
                Descarte de psicopatología severa.';
            break;
            case $c < 66:
                $text = 'Respuesta hacia un área de 
                conflicto particular.
                Posibilidad de ser una persona neurótica.
                Adaptabiliad y buen funcionamiento en aspectos 
                divergidos a las áreas de conflicto.';
            break;
            case $c < 80:
                $text = 'Rigidez en convicciones morales,
                sociales y/o políticas.
                Trastorno neurótico o psicótico.
                Una vez descartado un trastorno psiquiátrico puede 
                tratarse de una persona oportunista, depresiva, 
                impaciente, insatisfecha, inestable y/o curiosa';
            break;
            case $c < 100:
                $text = 'Responder a todos los reactivos falso.
                Simulación o exageración de síntomas.
                Resistencia a la prueba.
                Falta de cooperación.
                Psicosis.';
            break;
            default:
                $text = 'Respuestas ejecutadas al azar o por 
                incapacidad para comprender la lectura. Puede 
                haber respondido verdadero o falso a todos los 
                reactivos.
                Simulación de enfermedad mental o exageración de 
                la misma.
                Paciente psiquiátrico seriamente perturbado.
                Inconformismo o resignación ante creencias y/o 
                costumbres políticas, sociales o religiosas.';
            break;
        }
        return $text;
    }

    function scale_K($c){
        switch($c){
            case $c < 41:
                $text = 'Se respondió verdadero a la mayoría 
                de reactivos.
                Desorganización emocional, ingenuidad, 
                autocrítica, debilidad yoica.
                Pretende proyetar una imagen inaceptable de su 
                persona.
                Exageración de conflictos.
                Timidez, inhibición, incapacidad de relacionarse 
                con los demás.
                Sincero y torpe en sus relaciones, cínico o 
                incrédulo.
                Conformista.
                Abulia.
                Desconfianza, suspicacia de los demás.
                Dificultad para enfrentar los problemas o darles 
                solución.
                Confusión orgánica o psicótica.
                Niveles bajos de autoconocimiento y 
                autocomprensión.';
            break;
            case $c < 71:
                $text = 'Adaptación, sociabilidad, capacidad 
                intelectual alta.
                Independencia, autoconfianza.
                Alto nivel de comunicación con el medio.
                Comprensión y solución de problemas de forma 
                independiente y razonable.
                Ingenio y versatilidad.
                Elevado control en sus relaciones 
                interpersonales.
                Pensamiento claro.
                Pocos síntomas de trastorno emocional.';
            break;
            default:
                $text = 'Posible negación de problemas 
                personales.
                Respondió falso a gran parte de los reactivos.
                Pretende dar una imagen de control y eficacia.
                Timidez, indecisión, inhibición.
                Falta de autoconocimiento y autoentendimiento.
                Intolerancia a convicciones exrtañas o poco 
                convencionales.
                Baja probabilidad de conductas antisociales.';
            break;
        }
        return $text;
    }

    function scale_Hs($c){
        switch($c){
            case $c < 41:
                $text = 'No presenta quejas o preocupaciones 
                somáticas.
                Probabilidad de desatención a signos 
                síntomas de enfermedad.
                Optimismo, energía, satisfacción.
                Efectividad.';
            break;
            case $c < 56:
                $text = 'Escasa preocupación acerca del cuerpo y 
                la salud propia.
                Emotividad abierta y equilibrada.
                Realista y perspicaz.';
            break;
            case $c < 66:
                $text = 'Presencia de un trastorno de salud 
                específico.
                Probabilidad de inmadurez, irritabilidad, 
                tendencia a la queja y al lamento.
                Preocupación por la salud corporal propia 
                (peso, funcionamiento físico, entre otras).';
            break;
            case $c < 76:
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

    function scale_D($c){
        switch($c){
            case $c < 41:
                $text = 'Actividad, entusiasmo, optimismo.
                Sin disturbios emocionales, ni problemas de 
                inhibición o retracción social.
                Probabilidad de bajo control de los impulsos.
                Intereses sociales.';
            break;
            case $c < 56:
                $text = 'Conformidad, comodidad y adaptación 
                antes las relaciones sociales.
                Estabilidad emocional, autoconfianza, bajos 
                niveles de depresión y sentimientos de culpa.
                Relajación, comodidad, felicidad, energía y
                competividad.
                Energía elevada para afrontar los problemas 
                y encontrarles solución.
                Actitud realista.';
            break;
            case $c < 66:
                $text = 'Probabilidad de inhibición, 
                irritabilidad y timidez.
                Sentimientos relativamente crónicos de tristeza, 
                infelicidad, insatisfacción consigo mismo y con 
                los demás.
                Preocupación, pesimismo leve.
                Actitud responsable.
                Modestia.';
            break;
            case $c < 76:
                $text = 'Tendencia al aislamiento, timidez, 
                actitud vergonzante.
                Nivel energético disminuido, dificultades de 
                concentración.
                Quejas somáticas, trastornos del sueño.
                Baja autoestima, sentimientos de inadecuación.
                Presencia de aflicción, disforia y pesimismo.';
            break;
            default:
                $text = 'Ensimismamiento, introversión.
                Desesperanza, sentimientos de culpabilidad.
                Autopercepción de inadecuación.
                Preocupación acerca de la muerte; probabilidad 
                de ideación suicida.
                Apatía, abatimiento, enlentecimiento psicomotor.';
            break;
        }
        return $text;
    }

    function scale_Hi($c){
        switch($c){
            case $c < 41:
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
            case $c < 56:
                $text = 'Actitud realista.
                Apertura hacia los sentimientos.
                Estilo lógico y racional.';
            break;
            case $c < 66:
                $text = 'Actitud centrada en sí mismo, 
                superficialidad.
                Inmadurez y actitud manipuladora ocasional.
                Conformismo, moralismo.
                Necesidad de agradar, inseguridad.
                Actitud demostrativa y extravertida.';
            break;
            case $c < 76:
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

    function scale_Dp($c){
        switch($c){
            case $c < 41:
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
            case $c < 56:
                $text = 'Sinceridad, actitud confiable, 
                confianza hacia los demás.
                Persistencia, responsabilidad.';
            break;
            case $c < 66:
                $text = 'Impulsividad.
                Conducta intrépida y aventurera.
                Actitud hedonista.
                Resentimiento, inestabilidad, impaciencia.
                Sociabilidad.
                Seguridad y asertividad.
                Probable creatividad e imaginación.';
            break;
            case $c < 76:
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

    function scale_MfM($c){
        switch($c){
            case $c < 41:
                $text = 'Patrón tradicional de intereses 
                masculinos.
                Pocos intereses, temerarios, 
                descuidados, toscos, poca 
                originalidad, agresivos.
                Orientado a la acción.
                Si la escala 4 es elevada, puede reflejar 
                un estereotipo de machismo prominente.';
            break;
            case $c < 56:
                $text = 'Sentido práctico.
                Actitud realista.
                Convencionalismo.
                Iniciativa.';
            break;
            case $c < 66:
                $text = 'Control del sí.
                Expresividad demostrativa.
                Sentido común.
                Intereses hacia el arte, la estética y la 
                belleza.
                Tacto y sensibilidad social.';
            break;
            case $c < 76:
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

    function scale_MfF($c){
        switch($c){
            case $c < 41:
                $text = 'Pasiva, sumisa, restringida, 
                dependencia, modestia.
                Buen control de impulsos.
                Facilidad de autocomprenderse y para obeservar 
                errores externos de sí misma.';
            break;
            case $c < 52:
                $text = 'Empatía.
                Conducta competente.
                Iniciativa.
                Actitud de consideración.
                Idealismo.';
            break;
            case $c < 60:
                $text = 'Actividad.
                Actitud aventurera.
                Espontaniedad.
                Asertividad.';
            break;
            case $c < 70:
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

    function scale_Pa($c){
        switch($c){
            case $c < 41:
                $text = 'Pacientes no psiquiátricos:
                Tendencia al equilibrio y al ánimo 
                placentero.
                Sujetos ordenados, razonables, maduros en sus 
                relaciones, prudentes.
                Lealtad, confianza.
                Reservado, convencional, autocontrol.
                Interesado en actividades sociales.
                Adaptación a situaciones cotidianas.
                Ordenados, sensatos, organizados y cautelosos.
                Pacientes clínicos:
                Prudente, evasivo, reservado, 
                desconfiado, obstinado, testarudo.
                Falta de interés.
                Insatisfacción, sensible, egocéntrico, 
                convicciones rígidas, poco exitoso.
                Torpe, descortés, rudo.
                Susceptible.
                Poca capacidad de insight.
                Probabilidad de rasgos paranoides.';
            break;
            case $c < 56:
                $text = 'Racionalidad.
                Pensamiento claro.
                Cautela.
                Flexibilidad.';
            break;
            case $c < 66:
                $text = 'Sensibilidad al rechazo y a los 
                desaires.
                Notorio interés por las opiniones ajenas.
                Sujetos enérgicos, trabajadores, creativos, 
                inteligentes, colaboradores.
                Falta de autoconfianza.
                Nerviosismo y preocupación.
                Desconfianza. Cautela y defensa en el inicio 
                de los contactos sociales.
                Contracción al trabajo.';
            break;
            case $c < 76:
                $text = 'Ira, resentimiento, sensibilidad, 
                desconfianza, suceptibilidad.
                Tendencias paranoides.
                Desplazamiento de la culpa, actitud crítica.
                Hostilidad, suspicacia.
                Moralidad, rigidez en convicciones, 
                obstinación.
                Tendencia a racionalizar y/o negar conflictos 
                emocionales.
                Tendencia a malinterpretar situaciones sociales.';
            break;
            default:
                $text = 'Probabilidad de desorden del 
                pensamiento.
                Sintomas psicóticos.
                Proyección como mecanismo de defensa.
                Pensamientos perturbados, delirios de 
                grandenza.                
                Creencias erróneas.
                Ideas de referencia.
                Disposición vengativa, hostilidad, rencor y 
                amargura.
                Cavilación excesiva.
                Probabilidad de actuación en función del 
                delirio.';
            break;
        }
        return $text;
    }

    function scale_Pt($c){
        switch($c){
            case $c < 41:
                $text = 'Autoconfianza, metas e intereses 
                variados.
                Libre de inseguridad.
                Ausencia de temores desadaptativos.
                Actitud relajada y de bienestar.
                Persistencia y eficiencia.';
            break;
            case $c < 56:
                $text = 'Actitud confiable.
                Equilibrio, adaptabilidad, capaces, eficientes 
                sin preocupaciones innecesarias.
                Organización, puntualidad.';
            break;
            case $c < 66:
                $text = 'Conciencia y responsabilidad acerca 
                del propio accionar.
                Tendencia a intelectualizar.
                Contracción al trabajo.
                Organización, orden, tendencia al 
                perfeccionismo.
                Actitud autocrítica.
                Capacidad introspectiva.';
            break;
            case $c < 76:
                $text = 'Inseguridad, ansiedad, tensión.
                Preocupación, actitud aprensiva, nerviosismo, 
                agitación, angustia.
                Temor a cometer equivocaciones y errores.\n
                Minuciosidad, indecisión.
                Labilidad de intereses
                Moralismo';
            break;
            default:
                $text = 'Cavilación, rumiación permanente de 
                problemas y sus posibles soluciones.
                Agitación psicomotora.
                Sentimientos de culpa, ansiedad, miedo 
                irracional, temores.
                Probabilidad de conductas rituales.\n
                Supersticiones, rigidez en convicciones 
                religiosas o morales.
                Sentimientos de culpa.
                Expresiones de depresión.';
            break;
        }
        return $text;
    }

    function scale_Es($c){
        switch($c){
            case $c < 41:
                $text = 'Convencionalismo, conservadurismo.
                Control sobre los propios impulsos.
                Actitud sumisa, dependencia, sensibilidad, 
                bondad, responsabilidad, poca imaginación.';
            break;
            case $c < 56:
                $text = 'Adaptabilidad.
                Confiabilidad, seguridad.
                Equilibrio emocional.';
            break;
            case $c < 66:
                $text = 'Escaso interés por las personas.
                Poca habilidad práctica.
                Creatividad e imaginación.
                Preocupaciones religiosas o espirituales.';
            break;
            case $c < 76:
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

    function scale_Ma($c){
        switch($c){
            case $c < 41:
                $text = 'Actitud pesimista y apática.
                Frecuente aparición de fatiga.
                Depresión.
                Falta de energía.
                Timidez, dependencia.
                Poca autoconfianza.
                Humildad, modestia.
                Indiferencia y poco afán antes cosas o 
                situaciones que se presentan.
                Sentimientos depresivos.';
            break;
            case $c < 56:
                $text = 'Sociabilidad, amigabilidad.
                Actitud responsable, realista.
                Entusiasmo.
                Equilibrio';
            break;
            case $c < 66:
                $text = 'Gregario.
                Poca tolerancia al tedio.
                Amplia gama de intereses.
                Contracción al trabajo, efectividad.
                Orientación al logro.
                Actitud emprendedora.';
            break;
            case $c < 76:
                $text = 'Euforia.
                Actividad excesiva.
                Locuacidad.
                Inquietud, impaciencia, labilidad.
                Relaciones superficiales.';
            break;
            default:
                $text = 'Expansividad, grandiosidad.
                Personas activas y enérgicas.
                Pobre control impulsivo.
                Hiperactividad, excitación, distractibilidad, 
                irritabilidad, hostilidad injustificada e 
                irracional, agitación, rapidez psicomotora, 
                poca tolerancia a la frustración.
                Toma de decisiones impulsiva.
                Confusión.';
            break;
        }
        return $text;
    }

    function scale_Is($c){
        switch($c){
            case $c < 41:
                $text = 'Calidez.
                Sociabilidad, actitud agregaria, 
                carismáticos.
                Autoconfianza y asertividad.
                Autoindulgencia.
                Exhibicionismo, iniciativa, 
                manipulador, oportunista, inmaduro.';
            break;
            case $c < 56:
                $text = 'Actividad, energía.
                Actitud amistosa.
                Locuacidad.';
            break;
            case $c < 66:
                $text = 'Reserva, seriedad, cautela.
                Sobrecontrol de los impulsos.
                Apocada habilidad social.';
            break;
            case $c < 76:
                $text = 'Introversión.
                Depresión.
                Actitud vergonzante, timidez.
                Falta de autoconfianza.
                Actitud taciturna, irritabilidad.
                Rigidez en sus convicciones, 
                sumisión, obediencia.';
            break;
            default:
                $text = 'Ensimismamiento, actitud distante.
                Desconfianza, inseguridad, indecisión.
                Austeridad, recato.
                Rumiación.';
            break;
        }
        return $text;
    }
}
?>