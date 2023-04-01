<?php
include("arrayPRUEBA.php");
class supplementaryScaleInterpretation{

    function valuesT($counter){
        $i = 0;
        $suggestions = array();
        while($i <= sizeof($counter)){
            switch($i){
                case 0:
                    array_push($suggestions, $this->scale_A($counter[0]));
                break;
                case 1:
                    array_push($suggestions, $this->scale_R($counter[1]));
                break;
                case 2:
                    array_push($suggestions, $this->scale_Fyo($counter[2]));
                break;
                case 3:
                    array_push($suggestions, $this->scale_AMAC($counter[3]));
                break;
                case 4:
                    array_push($suggestions, $this->scale_HR($counter[4]));
                break;
                case 5:
                    array_push($suggestions, $this->scale_Do($counter[5]));
                break;
                case 6:
                    array_push($suggestions, $this->scale_Rs($counter[6]));
                break;
                case 7:
                    array_push($suggestions, $this->scale_Dpr($counter[7]));
                break;
                case 8:
                    array_push($suggestions, $this->scale_GM($counter[8]));
                break;
                case 9:
                    array_push($suggestions, $this->scale_GF($counter[9]));
                break;
                case 10:
                    array_push($suggestions, $this->scale_EPK($counter[10]));
                break;
                case 11:
                    array_push($suggestions, $this->scale_EPS($counter[11]));
                break;
                case 12:
                    array_push($suggestions, $this->scale_ls1($counter[12]));
                break;
                case 13:
                    array_push($suggestions, $this->scale_ls2($counter[13]));
                break;
                case 14:
                    array_push($suggestions, $this->scale_ls3($counter[14]));
                break;
                case 15:
                    array_push($suggestions, $this->scale_Fp($counter[15]));
                    
                    for ($i = 0; $i < 16; ++$i)
                    {                 
                        $html = $suggestions[$i];
                        print $html;
                    }
                break;
            }
            $i++;
        }
    }
    function scale_A($c){   
        $text = "";     
        switch($c){
            case $c < 41:
                $text = "<h3><B> Escala A </B></h3> <p>Es indicativa de que el individuo no se 
                siente ansioso, con fluidez verbal, franca, 
                abierta amistosa, sociable, amable,
                informal, asume un papel preponderante 
                en la relación con los demás.
                Es persuasivo, exhibicionista y eficiente, 
                capaz de expresar ideas claras, versátil 
                ingeniosos, confiado en sí mismo, 
                competitivo con un alto valor del éxito y 
                logros intensado en el poder, la posición 
                y el reconocimiento.<br>
                Por otra parte manipula a las demás 
                persona, y es incapaz de demorar la 
                satisfacción de sus impulsos, 
                generalmente actúa antes de reflexionar, 
                sin considerar las consecuencias de sus 
                actos. Además los puntajes bajos 
                reflejan ausencia de angustia emocional. 
                Estas personas tienden a ser enérgicas, 
                competitivas y socialmente 
                extrovertidas.
                Pueden ser incapaces de tolerar la 
                frustración y usualmente prefieren la 
                acción a la reflexión.</p>";
            break;
            case $c > 64:
                $text = "<h3><B> Escala A </B></h3>Son personas que se caracterizan por 
                sentirse ansiosas e incomodas, son 
                pesimistas y apáticas. 
                Generalmente se alejan de 
                personas que los rodean, debido a que 
                son temerosas y les falta confianza en 
                sus capacidades; tienden a ser 
                cautelosas, y dudan para tomar 
                decisiones, se dejan influir pos 
                sentimientos personales difusos, además 
                se inclinan a racionalizar acerca de sus 
                dificultades, y llegan a lastimar a otros.
                Son personas sumisas complacientes, 
                sugestionables y conformistas, por lo 
                que aceptan de manera abierta la 
                autoridad de otros.";
            break;          
        }
        return $text;
    }
    
    function scale_R($c){  
        $text = "";      
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala R </B></h3>Puede ser una persona emotiva, 
                desinhibida verbal, entusiasta, 
                atrevida y alegre. 
                También puede ser una persona 
                generosa, impulsiva, agresiva, 
                sarcástica, informal y 
                autoindulgente, puede ser astuta, 
                perspicaz, lista, sutil, engañosa y 
                mentirosa.
                Además son extrovertidas, 
                emotivas, espontáneas y su estilo 
                de vida es dominante en sus 
                relaciones interpersonales.
                Aparecen como enérgicas, 
                expresivas informales. La 
                interpretación de las puntuaciones 
                bajas es indicativa de un individuo 
                que es sociable, abierto, 
                parlanchín, arriesgado, atrevido, 
                vigoroso. 
                Además es mandón, le gusta 
                discutir, es egoísta, 
                autoindulgente, perspicaz, 
                precavido.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala R </B></h3> Parece carecer de insight, es 
                sobrecontrolador e inhibido 
                socialmente, también se percibe a 
                sí mismos y son percibidos por los 
                demás como convencionales y 
                reservados en el sentido 
                emocional, amables y poco 
                espontáneos.
                Tiende a evitar los conflictos en 
                vez de tratarlos directamente 
                debido a que suele ser sumiso y 
                cauteloso. Otros lo ven como 
                demasiado conservador en su 
                conducta y acciones. Además se 
                caracteriza por mostrar su 
                pensamiento claro, ser lento en 
                sus acciones y muy meticuloso.
                La interpretación de puntuaciones 
                elevadas de la escala de represión 
                es indicativa de un individuo 
                formal, de ideas claras, cuidadoso.";
            break;          
        }
        return $text;
    }

    function scale_Fyo($c){  
        $text = "";      
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala Fyo </B></h3> Las personas con puntajes bajos 
                tienden a presentar más 
                problemas y más severos que las 
                demás personas. Además tienen 
                pocos recursos psicológicos para 
                enfrentarse al estrés, por lo que su 
                pronóstico con relación al cambio 
                en psicoterapia, no es positivo.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala Fyo </B></h3> Tienden a estar más adaptados 
                psicológicamente y muestran más 
                habilidades para enfrentarse a los 
                problemas y situaciones 
                estresantes. 
                Tienden a ser más estables y 
                responsables en sus actividades, lo 
                cual los hace confiables ante los 
                demás; además son persistentes, 
                inteligentes, e independientes, por 
                lo que producen una primera 
                impresión favorable en quienes los 
                rodean. 
                Sin embargo, pueden llegar a ser 
                oportunistas y manipuladores para 
                lograr sus objetivos, debido a que 
                desarrollan fuertes intereses y se 
                muestran competitivos. 
                Asimismo, quizá sean hostiles y 
                rebeldes hacia la autoridad, 
                especialmente por su gran 
                confianza en sí mismos, de modo 
                que llegan a ser sarcásticos y 
                cínicos ante los demás. 
                Los hombres con puntuaciones 
                elevadas tienen un apropiado 
                estilo de conducta masculino.";
            break;   
        }
        return $text;
    }

    function scale_AMAC($c){   //INVESTIGAR QUE ES PUNTAJE CRUDO    
        $text = "";  
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala A-MAC </B></h3> Los puntajes bajos indican que el 
                individuo tiende a ser introvertido, tímido y 
                con falta de confianza en sí mismo. 
                Puntajes crudos menores de 24 contraindican 
                abuso de substancias.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala A-MAC </B></h3> La elevación de la escala Mac Andrew 
                no sugiere desarrollo de adicción a las substancias 
                ni indica la presencia de uso o abuso de substancias, 
                solamente sugiere un desarrollo potencial de 
                alcoholismo o posibles problemas de abuso de drogas.
                Los puntajes altos son característicos también de 
                individuos que son socialmente extrovertidos y que 
                están dispuestos a correr riesgos, además tienen 
                problemas para concentrarse, pueden tener historias 
                de problemas de conducta en la escuela o con la 
                ley y disfrutan las competencias de cualquier tipo. 
                Los puntajes naturales arriba de 24 sugieren abuso 
                de substancias, ya sea alcohol u otras drogas.";
            break;   
        }
        return $text;
    }

    function scale_HR($c){     
        $text = "";   
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala HR </B></h3> Puntuaciones bajas en HR, no existen suficientes 
                datos que permitan la interpretación adecuada, por lo que 
                dichas puntuaciones pueden interpretarse de dos formas, 
                ya que no se espera que presenten el síndrome de hostilidad 
                sobrecontrolada, esto es: o son personas crónicamente 
                agresivas o son individuos que expresan de manera bastante 
                apropiada sus sentimientos de agresión.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala HR </B></h3> Los individuos que obtienen puntuaciones altas 
                en la escala tienden a evitar la expresión abierta de la 
                agresión sin embargo a menudo en momentos de extrema 
                provocación, actúan de una manera muy violenta y pueden 
                reaccionar con conductas acting out. Las personas con 
                puntuaciones elevadas en HR, tienden a no expresar 
                sentimientos de cólera, ni siquiera de manera verbal; 
                son sociables y responsables y tienen una fuerte 
                necesidad de sobresalir ante los demás; no obstante, 
                son dependientes y confiados. Suelen describir a sus 
                familias de origen como cálidas y fuentes de apoyo.";
            break;   
        }
        return $text;
    }

    function scale_Do($c){     
        $text = "";   
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala Do </B></h3> Las puntuaciones bajas en Do, muestran a personas 
                sumisas, poco enérgicas y fácilmente influenciables por 
                otras personas, carecen de confianza en sí mismas y 
                sienten que manejan sus problemas inadecuadamente.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala Do </B></h3> Los puntajes altos de Do son asociados con 
                equilibrio, confianza, liderazgo, seguridad en sí mismo, 
                iniciativa social, perseverancia, resolución y liderazgo 
                de grupo, es decir son características de personas consideradas 
                generalmente como dominantes en situaciones sociales, que se 
                consideran a sí mismos y son considerados por los demás 
                capaces de enfrentar apropiadamente las situaciones personales, 
                no se intimidan fácilmente y se sienten seguros. 
                Suelen ser personas optimistas, eficientes, realistas y
                orientadas a las tareas que les son encomendadas, por lo que 
                se muestran muy perseverantes y ecuánimes ante situaciones adversas.";
            break;   
        }
        return $text;
    }

    function scale_Rs($c){    
        $text = "";    
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala Rs </B></h3> Quienes obtienen puntuaciones bajas en 
                Rs, debajo de 40, se caracterizan por no 
                estar dispuestas a asumir 
                responsabilidades y tal vez no hayan 
                aceptado valores o normas sociales; por 
                otra parte no pueden ser vistos a sí mismos 
                como poco dignos de confianza, faltos de 
                integridad y con pobre sentido de 
                responsabilidad para con el grupo.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala Rs </B></h3> Las personas que tienen más de 25 años 
                con puntuaciones altas tienden a aceptar 
                su sistema de valores actual e intentan 
                continuar utilizándolo, y quienes obtienen 
                puntuaciones bajas pueden cuestionar su 
                sistema de valores presente o rechazar los 
                recién adquiridos. Para las personas más 
                jóvenes, las puntuaciones RS altas indican 
                que aceptan el sistema de valores de los 
                padres, mientras que las puntuaciones 
                bajas indican el cuestionamiento o rechazo 
                del sistema de valores de los padres. 
                Puntuaciones altas en RS sugieren que un 
                individuo tiende a verse a sí mismo y ser 
                visto por otras personas como dispuesto a 
                aceptar las consecuencias de su propia 
                conducta y como responsable, así mismo 
                se le considera digno de confianza y 
                persona íntegra, con sentido de 
                responsabilidad para el grupo; además, es 
                probable que se encuentre en situaciones 
                de liderazgo y toma de decisiones.
                Puntuaciones altas arriba de 60, indican 
                un fuerte sentido de justicia y un alto 
                sentido a las normas, indican también que
                la persona tiene confianza en sí misma, es 
                digna de confianza y responsable, y que 
                posee, además, un sentido de compromiso 
                social. Así mismo, están profundamente 
                interesados en problemas éticos y morales: 
                rechazan los privilegios y favores, y dan un 
                énfasis excesivo al cumplimiento de su 
                parte correspondiente de cargas y deberes.";
            break;   
        }
        return $text;
    }

    function scale_Dpr($c){        
        $text = "";
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala Dpr </B></h3> Los sujetos con puntuaciones bajas en Dpr, 
                tienden a ser bien adaptados, optimistas y consientes.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala Dpr </B></h3> Parecen estar un poco adaptadas, 
                además de ser generalmente ineficientes, 
                pesimistas y angustiados además pueden 
                desarrollar síntomas físicos durante periodos 
                de mayor estrés y sentir que la vida los abruma 
                la mayor parte del tiempo";
            break;   
        }
        return $text;
    }

    function scale_GM($c){     
        $text = "<br> ";   
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala GM </B></h3>";//Interpretacion no encontrada
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala GM </B></h3> Las puntuaciones elevadas tanto en 
                hombres con mujeres, son características 
                positivas, debido a que son personas que 
                tienden a tener confianzas en sí mismas y 
                libres de temores y preocupaciones. En 
                caso de varones GM se relaciona con una 
                gran confianza en sí mismos, gran 
                perseverancia y amplios intereses, además 
                de la carencia de temores o sentimientos 
                referentes de sí mismos.
                Para las mujeres GM se vincula con una 
                gran confianza en sí mismas, con 
                honestidad y la disposición para probar 
                nuevas cosas, además de que indica la 
                carencia de preocupaciones y sentimientos 
                referidos a sí mismas.";
            break;   
        }
        return $text;
    }

    function scale_GF($c){    
        $text = "";    
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala GF </B></h3> ";//Interpretacion no encontrada.
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala GF </B></h3> Las puntuaciones elevadas tanto en 
                hombres con mujeres, son 
                características positivas, debido a que 
                son personas que tienden a tener 
                confianzas en sí mismas y libres de 
                temores y preocupaciones. En caso de 
                varones GM se relaciona con una gran 
                confianza en sí mismos, gran 
                perseverancia y amplios intereses, 
                además de la carencia de temores o 
                sentimientos referentes de sí mismos.
                Para las mujeres GM se vincula con una 
                gran confianza en sí mismas, con 
                honestidad y la disposición para probar 
                nuevas cosas, además de que indica la 
                carencia de preocupaciones y 
                sentimientos referidos a sí mismas.";
            break;   
        }
        return $text;
    }

    function scale_EPK($c){     
        $text = "<br> ";   
        switch($c){
            case $c > 64://corte natural 30. Investigar.
                $text = "<br><h3><B> Escala EPK </B></h3> Los veteranos de guerra y otras personas 
                que hayan experimentado un evento 
                catastrófico y que obtengan 
                puntuaciones altas en EPK, tienden a 
                presentar síntomas de trastorno por 
                estrés postraumático, que incluyen 
                angustia emocional intensa, así como 
                ansiedad y alteraciones del sueño, 
                sienten culpa y depresión pos sus 
                experiencias, presentan desordenes 
                emocionales y manifiestan tener 
                pensamientos intrusitos no deseados, 
                además sienten que han perdido el 
                control sobre sus emociones y 
                pensamientos, expresan sentimientos de 
                no ser comprendidos o considerados por 
                los demás, debido a las situaciones 
                estresantes que han vivido.";
            break;   
        }
        return $text;
    }

    function scale_EPS($c){ 
        $text = "";       
        switch($c){
            case $c > 64:
                $text = "<br><h3><B> Escala EPS </B></h3> Parece estar muy relacionada con los 
                índices de ansiedad y con la Pt y A. La escala EPS 
                tiende a elevarse en personas que presentan trastornos 
                somáticos en los que la ansiedad es un componente importante.
                Se encontró muy elevada en pacientes con colon irritable y 
                también en pacientes con dermatitis, lo que podría indicar 
                que tiende a elevarse en personas que presentan trastornos 
                somáticos en los que la ansiedad es un componente 
                importante.";
            break;   
        }
        return $text;
    }

    function scale_ls1($c){       
        $text = ""; 
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala ls1 </B></h3> La escala es bipolar significa que las puntuaciones 
                bajas indican lo contrario a las puntajes altos.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala ls1 </B></h3> Son tímidos en las situaciones interpersonales, 
                muestran incomodidad al estar rodeados de otros y 
                son reacios para iniciar relaciones. No se 
                consideran a sí mismos como sociables. Las 
                personas pueden mostrase tímidas con los demás, 
                apenarse fácilmente, molestas en situaciones 
                sociales e incomodas en situaciones nuevas.";
            break;   
        }
        return $text;
    }

    function scale_ls2($c){   
        $text = "";     
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala ls2 </B></h3> La escala es bipolar significa que las 
                puntuaciones bajas indican lo contrario a los 
                puntajes altos.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala ls2 </B></h3> Tienden a evitar estar en grupo, son poco 
                amigables, se aíslan socialmente y evitan participar 
                con los demás. Quizá les disguste las fiestas y los 
                bailes. Indica disgusto y repudio a las actividades 
                en grupo y al estar en multitudes, por lo que estos
                sujetos evitan el contacto con otras personas.";
            break;   
        }
        return $text;
    }

    function scale_ls3($c){      
        $text = "";  
        switch($c){
            case $c < 41:
                $text = "<br><h3><B> Escala ls3 </B></h3> La escala es bipolar significa que las puntuaciones 
                bajas indican lo contrario a las puntajes altos.";
            break;
            case $c > 64:
                $text = "<br><h3><B> Escala ls3 </B></h3> Tienden a evitar estar en grupo, son poco 
                amigables, se aíslan socialmente y evitan participar 
                con los demás. Quizá les disguste las fiestas y los 
                bailes. Esta escala indica baja autoestima y poca confianza 
                autocrítica, cuestionamiento del juicio propio y sentimientos 
                de incapacidad para determinar el propio destino.";
            break;   
        }
        return $text;
    }

    function scale_Fp($c){  
        $text = "";      
        switch($c){
            case $c < 89:
                $text = "<br><h3><B> Escala Fp </B></h3> Si tanto la F como la Fp están 
                debajo de 89 se puede interpretar 
                todas las escalas, las básicas, las de 
                contenido y las suplementarias.";
            break;
            case $c > 90:
                $text = "<br><h3><B> Escala Fp </B></h3> Puntuacion cuestionable
                No se deben interpretar las 
                escalas de contenido y las 
                suplementarias.";
            break;
            case 110: $text ="<br><h3><B> Escala Fp </B></h3> Utilidad del perfil invalida
            Posible patologia, si otras
            escalas relacionadas son validas.
            Si la F es valida pero la Fp no, solo se
            podrá interpretar las escalas basicas, 
            pero no las suplementarias.";
            break;
            case $c > 110:
                $text = "<br><h3><B> Escala Fp </B></h3> Puntuacion invalida
                Si la F y la Fp están arriba de
                110, la prueba no es valida y
                NO se interpreta.";
            break;
        }
        return $text;
    }

}
?>