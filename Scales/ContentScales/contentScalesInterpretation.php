<?php
class contentScaleInterpretation{
    function valuesT($counter = array()){
        $i = 0;
        $suggestions = array();
        while($i < count($counter)){
            switch($i){
                case 0:
                    array_push($suggestions, $this->scale_ANS($counter[0]));
                break;
                case 1:
                    array_push($suggestions, $this->scale_MIE($counter[1]));
                break;
                case 2:
                    array_push($suggestions, $this->scale_OBS($counter[2]));
                break;
                case 3:
                    array_push($suggestions, $this->scale_DEP($counter[3]));
                break;
                case 4:
                    array_push($suggestions, $this->scale_SAU($counter[4]));
                break;
                case 5:
                    array_push($suggestions, $this->scale_DEL($counter[5]));
                break;
                case 6:
                    array_push($suggestions, $this->scale_ENJ($counter[6]));
                break;
                case 7:
                    array_push($suggestions, $this->scale_CIN($counter[7]));
                break;
                case 8:
                    array_push($suggestions, $this->scale_PAS($counter[8]));
                break;
                case 9:
                    array_push($suggestions, $this->scale_PTA($counter[9]));
                break;
                case 10:
                    array_push($suggestions, $this->scale_BAE($counter[10]));
                break;
                case 11:
                    array_push($suggestions, $this->scale_ISO($counter[11]));
                break;
                case 12:
                    array_push($suggestions, $this->scale_FAM($counter[12]));
                break;
                case 13:
                    array_push($suggestions, $this->scale_DTR($counter[13]));
                break;
                case 14:
                    array_push($suggestions, $this->scale_RTR($counter[14]));
                break;
            }
            $i++;
        }

        return $suggestions;
    }
    function scale_ANS($c){        
        switch($c){
            case $c > 64:
                $text = 'Los adolescentes con puntuaciones altas 
                indican síntomas de ansiedad, incluyendo tensión 
                preocupaciones frecuentes, trastornos del sueño 
                (por ejemplo pesadillas, sueño intranquilo y dificultad para conciliar el sueño).
                Indican también confusión, problemas para 
                concentrarse e incapacidad para mantenerse ocupados en una tarea.
                Perciben que la vida es difícil para ellos y creen que sus dificultades son insuperables.
                Los adolescentes con calificaciones altas en esta escala se preocupan 
                porque consideran que pueden volverse locos y sienten 
                que un suceso terrible está a punto de ocurrir.
                Parecen darse cuenta de sus problemas y de que son diferentes a otros adolescentes.
                Posible existencia de relaciones conflictivas con los padres.
                El adolescente tiene conciencia de las preocupaciones, 
                generalmente acompañada de la sensación subjetiva de no poder superarlas.
                Esta escala parece evaluar la desadaptación general, como síntomas 
                específicos tales como la depresión y los problemas somáticos';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;          
        }
        return $text;
    }
    
    function scale_MIE($c){        
        switch($c){
            case $c > 64:
                $text = 'Evalúa la presencia de miedos específicos, 
                que incluyen ver sangre, estar en lugares altos, 
                temor a dejar el hogar, a desastres naturales, etc. 
                Las mujeres muestran calificaciones más elevadas que los hombres.
                También se eleva en reclusos probablemente por miedo específico a ser castigado.
                Las mujeres que calificaron alto, fueron vistas por sus parejas como: 
                desadaptadas, nerviosas y preocupadas acerca de la muerte.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;          
        }
        return $text;
    }

    function scale_OBS($c){        
        switch($c){
            case $c > 64:
                $text = 'Dificultades para tomar decisiones y meditan 
                excesivamente acerca de sus asuntos o problemas, 
                provocando que otros se impacienten.
                Tener que llevar a cabo cambios los llena de tensión 
                y pueden manifestarse algunas conductas compulsivas, 
                como contar o guardar cosas sin importancia.
                Tienden a preocuparse en exceso lo que con frecuencia 
                puede llevarlos a sentirse abrumados por sus propios pensamientos. 
                Los hombres que calificaron alto fueron descritos por sus parejas 
                como: desinteresados en las cosas y faltos de confianza en sí mismos. 
                Las mujeres fueron descritas como realistas acerca de sus habilidades, 
                exageradamente autocríticas y con tendencia a culparse a sí mismas.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_DEP($c){   
        switch($c){
            case $c > 64:
                $text = 'Pensamientos depresivos significativos; además, 
                quizá involucran sentimientos de tristeza, incertidumbre 
                acerca del futuro y desinterés por la propia vida. 
                Los individuos que puntúan alto en DEP tienden a la cavilación, 
                manifiestan infelicidad, lloran fácilmente y expresan 
                sentimientos de desesperanza y vacío interior. 
                Quizá verbalicen ideas suicidas o deseos de morir; pueden 
                llegar a creer que están condenados o que han cometido pecados imperdonables. 
                Perciben a las demás personas como carentes de interés en ellos o incapaces
                de apoyarlos. 
                Mientas más alta es la puntuación más acentuadas las 
                características depresivas de la persona. 
                A los hombres con puntuaciones altas, se les consideraba 
                como faltos de energía y desinterés en las cosas. 
                Además de sensibles al rechazo, indecisos y poco 
                efectivos para enfrentar los retos cotidianos.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_SAU($c){        
        switch($c){
            case $c > 64:
                $text = 'Puntajes altos se presentan en personas 
                con síntomas físicos en diversos órganos corporales. 
                Se incluyen sintomas gastrointestinales 
                (estreñimiento, náuseas y vómitos, problemas estomacales, etc.) 
                problemas neurológicos (convulsiones, mareos, desmayos y parálisis) 
                problemas en la piel, dolor (cabeza, rodillas), problemas respiratorios 
                (tos, fiebre de heno o asma) estos individuos se preocupan por su salud 
                y se sienten más enfermos que el resto de las personas.
                Las personas que tienen problemas reales de salud puntuan elevadas en esta escala';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_DEL($c){        
        switch($c){
            case $c > 64:
                $text = 'Los pensamientos delirantes que se manifiestan 
                en las personas con puntuaciones elevadas son característicos 
                de proceso psicótico de pensamiento. 
                Quizá manifiesten alucinaciones auditivas, visuales u olfativas, 
                además de reconocer que los pensamientos propios son extraños y peculiares. 
                Implica también ideas paranoides. 
                Estas personas pueden creer que tienen una misión o poderes especiales. 
                En la población mexicana indica que esta elevación puede deberse a factores religiosos y místicos.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_ENJ($c){        
        switch($c){
            case $c > 64:
                $text = 'Las personas con puntajes altos en 
                esta escala presentan problemas de control del enojo, 
                se consideran a si mismas como irritables y gruñonas, 
                además de impacientes, temperamentales y tercas. 
                A veces sienten deseos de maldecir o destrozar cosas. 
                Pueden perder el autocontrol y dañar fisicamente a la gente o a objetos. 
                Mientras más alta la escala más probabilidades de que se muestre abiertamente agresiva.
                Los hombres fueron descritos por sus parejas como 
                desagradables, tercos, con problemas en sus relaciones 
                interpersonales, enojonas y con arrebatos agresivos.
                Las mujeres presentaban estas mismas características, 
                pero además se entristecían fácilmente y se les dificultaba salir de ese estado.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_CIN($c){        
        switch($c){
            case $c > 64:
                $text = 'En personas con puntajes altos en esta 
                escala manifiestan ideas misantrópicas; 
                suponen motivaciones ocultas y negativas detrás 
                de las acciones de los demás, quizá crean, por 
                ejemplo, que la mayor parte de la gente es honesta 
                solo por miedo a ser descubierta. 
                Creen que los demás no son confiables, debido a 
                que se utilizan unos a otros y son amigables solo por razones egoístas.
                Posiblemente mantengan actitudes negativas hacia personas cercanas, 
                incluyendo compañeros de trabajo, familiares y amigos: 
                en general son poco amigables y no ayudan a los otros. 
                Algunas de estas personas tienen poca motivación de logro. 
                Si las puntuaciones son muy elevadas tal vez se observan ideas de tipo paranoide.
                En estudios realizados en delincuentes se encontró esta escala 
                elevada, siendo el grupo de homicidas el que presento las calificaciones más altas.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_PAS($c){        
        switch($c){
            case $c > 64:
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
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_PTA($c){        
        switch($c){
            case $c > 64:
                $text = 'Las personas con puntuaciones elevadas 
                en esta escala son muy trabajadoras, activas y 
                orientadas hacia el trabajo: frecuentemente se 
                muestran impacientes, irritables y tensas. 
                Para ellos, no hay suficiente tiempo en el día 
                para terminar sus tareas, por lo que no les gusta 
                esperar y ser interrumpidos. 
                Son muy directos y pueden ser desagradables en sus 
                relaciones con otros, a quienes presionan mediante su agresividad. 
                Suelen ser hostiles y se enojan con facilidad. 
                Al parecer en mujeres esta es una medida de desadaptación, 
                quienes obtienen puntajes altos son consideradas como suspicaces. 
                Se refieren a expresiones de enojo y competencia.
                Las esposas de los hombres que obtuvieron puntuaciones 
                elevadas, los describen como mundanos, críticos, enojones y tensos.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;     
        }
        return $text;
    }

    function scale_BAE($c){        
        switch($c){
            case $c > 64:
                $text = 'Las personas con puntajes elevados 
                en esta escala tienen una opinión 
                muy pobre de ellas mismas. 
                Creen que no les agradan a los demás y 
                que no son importantes para otros. 
                Mantienen actitudes negativas hacia sí mismos, 
                incluyendo pensamientos como el no ser atractivos, 
                considerados torpes, incapaces e inútiles y percibirse 
                como una carga para los demás. 
                Tienen poca confianza en sí mismos y encuentran 
                difícil aceptar cumplidos de otros, se sienten abrumados 
                por los defectos que ven en su persona. 
                Se comportan en forma desfavorable con los demás 
                y tienden a ser pasivos en sus relaciones interpersonales.
                Los cónyuges de estos individuos los describen como 
                personas que se dan por vencidas con facilidad, 
                susceptibles al rechazo y con poca confianza en sí mismos. 
                Son personas que experimentan dificultad para tomar 
                decisiones, se preocupan demasiado y tienen miedo a muchas cosas.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;    
        }
        return $text;
    }

    function scale_ISO($c){        
        switch($c){
            case $c > 64:
                $text = 'A los individuos con puntajes 
                altos les cuesta trabajo relacionarse 
                con los demás y prefieren estar solos.
                Es probable que en situaciones sociales 
                se sientan aislados y poco integrados al grupo.
                Se consideran a sí mismos como tímidos y no 
                les agradan las fiestas u otras reuniones sociales.
                Algunos tienen perturbaciones de sueño y 
                preocupaciones con respecto a la salud.
                Algunos se les diagnostican frecuentemente con 
                desórdenes depresivos. 
                Algunos fueron descritos por su pareja como tímidas, 
                tranquilas, poco amigables e incapaces de 
                disfrutar de las fiestas y de la convivencia con los amigos.
                ';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_FAM($c){        
        switch($c){
            case $c > 64:
                $text = 'Los individuos con puntuaciones elevadas en 
                FAM, manifiestan desavenencias y pleitos desagradables y 
                poco afectuosos.
                Incluso quizá sientan odio por su familia.
                Recuerdan haber sufrido abusos en su infancia 
                y consideran sus matrimonios como infelices y faltos de afecto.
                Probablemente tengan historias de abuso físico.
                Los varones con puntajes altos fueron descritos por sus parejas 
                como desadaptados, hostiles y antisociales, en tanto que las 
                mujeres eran percibidas como desadaptadas, hostiles, 
                hiperactivas, antisociales y poco confiables o responsables.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_DTR($c){        
        switch($c){
            case $c > 64:
                $text = 'Las puntuaciones elevadas en esta escala 
                indican conductas o actitudes que 
                provocan un desempeño laboral pobre.
                Algunos de los problemas de estas personas 
                se relacionan con poca confianza en sí mismos, 
                falta de concentración, obsesividad y tensión, así como 
                dificultad para tomar decisiones.
                Otros se refieren a falta de apoyo familiar en la 
                elección de su carrera, cuestionamientos personales 
                sobre esta elección, y actitudes negativas hacia compañeros de trabajo.
                Algunas de estas personas manifiestan ansiedad y preocupación 
                excesiva, otras refieren síntomas depresivos.
                Los rasgos más sobresalientes de sus parejas adjudicaron a
                las personas que obtenían calificaciones elevadas en DTR, 
                fueron desadaptación generalizada: los percibían como poco 
                amigables y cooperadores, además de distantes de los otros.
                En selección de personal, las personas con puntuaciones elevadas, 
                tienen dificultades de adaptación en el trabajo.
                Lo anterior ocurre aunque la escala no esté marcadamente 
                elevada, pero sí que sea el pico del perfil.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;   
        }
        return $text;
    }

    function scale_RTR($c){        
        switch($c){
            case $c > 64:
                $text = 'Manifiestan actitudes negativas hacia 
                los médicos y al tratamiento de salud mental.
                No creen que alguien pueda comprenderlos ni ayudarlos.
                Les resulta muy incómodo tratar con alguien más sus 
                asuntos o problemas personales.
                Quizá deseen que todo permanezca igual en su vida y 
                probablemente crean que un cambio es imposible.
                Prefieren pasar por alto una crisis o dificultad 
                que enfrentarla; con frecuencia reportan sintomas somáticos.';
            break;
            case $c <= 64:
                $text = 'Puntuación normal';
            break;
            
        }
        return $text;
    }
}
?>