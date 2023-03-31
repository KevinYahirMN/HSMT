<?php
class aditionalInterpretation{
    function maxScale($scales = array()){
        $fMax = 0;
        $sMax = 0;
        $fcMax = 0;
        $scMax = 0;
        $i = 3;
        while($i < count($scales)){
            if($scales[$i] > $fMax){
                $sMax = $fMax;
                $scMax = $fcMax;
                $fMax = $scales[$i];
                $fMax = $i - 2;
            }else if($scales[$i] > $sMax){
                $sMax = $scales[$i];
                $scMax = $i - 2;
            }
            $i++;
        }
        $sum = $fcMax + $scMax;

        $text = $this->SuggestionMenu($sum, $fcMax);

        return $text;

    }

    function SuggestionMenu($sum, $fMax){
        $sum = 0;
        switch($sum){
            case 3:
                $text = $this->three();
            break;
            case 4:
                $text = $this->four();
            break;
            case 5:
                $text = $this->fivesubMenu($fMax);
            break;
            case 7:
                $text = $this->seven();
            break;
            case 9:
                $text = $this->ninesubMenu($fMax);
            break;
            case 10:
                $text = $this->tensubMenu($fMax);
            break;
            case 11:
                $text = $this->elevensubMenu($fMax);
            break;
            case 12:
                $text = $this->twelve();
            break;
            case 13:
                $text = $this->thirteen();
            break;
            case 14:
                $text = $this->fourteen();
            break;
            case 15:
                $text = $this->fivesubMenu($fMax);
            break;
            case 17:
                $text = $this->seventeen();
            break;
        }
        return $text;
    }

    function fivesubMenu($fMax){
        if($fMax == 1 || $fMax == 4){
            $text = $this->onefive();
        }else{
            $text = $this->twofive();
        }
        return $text;
    }

    function ninesubMenu($fMax){
        switch($fMax){
            case 1:
                $text = $this->onenine();
            break;
            case 8:
                $text = $this->onenine();
            break;
            case 2:
                $text = $this->twonine();
            break;
            case 7:
                $text = $this->twonine();
            break;
            case 3:
                $text = $this->threenine();
            break;
            case 6:
                $text = $this->threenine();
            break;
            case 4:
                $text = $this->fournine();
            break;
            case 5:
                $text = $this->fournine();
            break;
        }
        return $text;
    }
    
    function tensubMenu($fMax){
        switch($fMax){
            case 1:
                $text = $this->oneten();
            break;
            case 9:
                $text = $this->oneten();
            break;
            case 2:
                $text = $this->twoten();
            break;
            case 8:
                $text = $this->twoten();
            break;
            case 4:
                $text = $this->fourteen();
            break;
            case 7:
                $text = $this->fourteen();
            break;
        }
        return $text;
    }

    function elevensubMenu($fMax){
        switch($fMax){
            case 2:
                $text = $this->twoeleven();
            break;
            case 9:
                $text = $this->twoeleven();
            break;
            case 3:
                $text = $this->threeeleven();
            break;
            case 8:
                $text = $this->threeeleven();
            break;
            case 4:
                $text = $this->foureleven();
            break;
            case 7:
                $text = $this->foureleven();
            break;
        }
        return $text;
    }

    function fifteensubMenu($fMax){
        if($fMax == 6 || $fMax == 9){
            $text = $this->sixfifteenn();
        }else{
            $text = $this->sevenfifteen();
        }
        return $text;
    }

    function three(){
        $text = '12/21\n
        Esta combinación representa a sujetos con 
        las siguientes características:\nPreocupados por su 
        salud, que se sienten muy enfermos ante cualquier 
        signo de malestar físico. Presencia de trastornos 
        digestivos, dolores de cabeza o cardíacos. 
        Manifiestan somáticamente su reacción ante el estrés 
        o problemas de la vida cotidiana. Ansiosos e 
        irritables, pueden expresar timidez, indecisión, 
        dependencia, desdicha, falta de iniciativa o 
        melancolía. Puede existir agresividad reprimida 
        hacia personas indiferentes a sus sentimientos. En 
        pacientes psiquiátricos, se observa adicción al 
        alcohol, causante principal de sus problemas 
        familiares, sociales y laborales. Mal pronóstico en 
        la psicoterapia al tener poca capacidad de insight y 
        evitar asumir con responsabilidad las consecuencias 
        de sus actos.';
        return $text;
    }

    function four(){
        $text = '13/31\n
        Esta combinación es más frecuente en 
        mujeres. Las características principales son las 
        siguientes:\nSíntomas pertenecientes a la histeria de 
        conversión e hipocondría. Manifestación continua de 
        dolores en la espalda, trastornos digestivos y del 
        sueño, son muy comunes en estas personas. Como 
        mecanismos de defensa, utilizan la negación, 
        racionalización, proyección, y generalmente atribuyen 
        a otros la responsabilidad de sus propios actos. 
        Inmadurez, egoísmo, egocentrismo, inseguridad, 
        necesidad de afecto son comunes. Se observa también 
        dificultad para relacionarse con el sexo opuesto. 
        Puede existir agresividad reprimida hacia personas 
        indiferentes a sus sentimientos o problemas 
        personales. Comportamiento convencional y aceptable 
        al “qué dirán” es frecuente. Mal pronóstico en la 
        psicoterapia al tener poca capacidad de insight y 
        evitar asumir con responsabilidad las consecuencias 
        de sus actos. Creencia de que el psicólogo es el 
        “salvador”, desplazándose la responsabilidad acerca 
        del resultado de la terapia que frecuentemente la 
        finalizan antes de tiempo al no ser satisfechas todas 
        sus expectativas.';
        return $text;
    }
    
    function onefive(){
        $text = 'Es más común en el sexo masculino, 
        manifestando las siguientes características:
        \nHipocondría severa. Ansiedad, indecisión, rebeldía, 
        insatisfacción, pesimismo. Manifiestan buen 
        desenvolvimiento social, pero falta de capacidad para 
        relacionarse con el sexo opuesto. Se observa adicción 
        al alcohol, causante principal de sus problemas 
        familiares, sociales y laborales. En terapia, 
        manifiestan como mecanismo de defensa la Negación, lo 
        que imposibilita el buen desarrollo de la misma.';
        return $text;
    }

    function twofive(){
        $text = 'Se observan las siguientes características 
        (es más frecuente en mujeres que en hombres):\nAnsiedad 
        adaptativa, depresión y fatiga. Falta de interés para 
        empezar de nuevo. Dependencia y sumisión. Competitivas 
        pero con miedo al fracaso. Susceptibilidad. 
        Autocontrol. Rechazo a las relaciones sociales y con 
        el sexo opuesto. Es muy común la obtención de esta 
        combinación en pacientes psiquiátricos con neurosis 
        depresiva, y depresión psicótica ocasionalmente. 
        Mal pronóstico en la psicoterapia al tener poca 
        capacidad de insight. Prefieren “seguir como están” 
        a someterse a psicoterapias desconocidas para ellos.';
        return $text;
    }

    function seven(){
        $text = 'Una de las características principales de los 
        sujetos pertenecientes a este perfil, son la agresividad 
        y sentimientos negativos. Si la escala 3 es más elevada 
        que la 4, puede tratarse de un sujeto pasivo-agresivo, 
        por el contrario, escalas más elevadas en 4 sugieren 
        cuadros violentos y agresivos. Este perfil es muy común 
        en sujetos con historiales criminales violentos. En casos 
        muy raros se observa un buen manejo de la agresividad, 
        subliminándola. En este grupo se observan dolores de 
        cabeza y gastrointestinales. Sensibilidad al rechazo, 
        rencor hacia la familia, rebeldía, inestabilidad en el 
        matrimonio, promiscuidad, tendencias suicidas, consumo 
        excesivo de alcohol, inestabilidad emocional.';
        return $text;
    }

    function onenine(){
        $text = 'Se observan las siguientes características:
        \nRepresión de hostilidad manifestada con estados 
        irritables. Desconfianza, aislamiento, desdicha y 
        depresión son manifestaciones comunes. Si el sujeto 
        tiene un cuadro psiquiátrico, puede ser 
        esquizofrénico o esquizoide.';
        return $text;
    }

    function twonine(){
        $text = 'Esta combinación representa a sujetos con 
        las siguientes características:\nAnsiedad, confusión e 
        irritabilidad son frecuentes. Preocupación frecuente 
        hacia los peligros reales o ficticios. Somatización, 
        insomnio, depresión, anorexia, fatiga son comunes. 
        Pesimistas, quejumbrosos, indecisos, inseguros, 
        sumisos y dependientes. Necesidad de logro y éxito. 
        Culpabilidad al no poder cumplir las metas fijadas. 
        Rígidos y moralistas. Dóciles y con capacidad de 
        establecer vínculos afectivos profundos. Buen 
        pronóstico en psicoterapia.';
        return $text;
    }

    function threenine(){
        $text = 'Ansiedad no incapacitante. Dolores físicos 
        leves. Sentimientos reprimidos de rencor profundo y 
        hostilidad hacia la familia, sentimientos justificados 
        en función de la conducta ajena. Personas complicadas, 
        narcisistas, egocéntricos, insoportables y/o 
        resentidos.';
        return $text;
    }
    
    function fournine(){
        $text = 'Se observan las siguientes características en 
        los sujetos 45/54: Inmadurez, narcisismo, dependencia, 
        rebeldía, extravagancia, baja tolerancia a la 
        frustración, bajos niveles de agresividad, 
        resentimiento, remordimientos, posible confusión en 
        relacionada con la identidad y roles sexuales, machismo 
        (en los hombres). En pacientes psiquiátricos generalmente 
        se observa diagnóstico de personalidad pasiva-agresiva.';
        return $text;
    }

    function oneten(){
        $text = 'Esta combinación representa a sujetos con 
        las siguientes características:\nAnsiedad, confusión e 
        irritabilidad son frecuentes. Somatización. 
        Extroversión, metas altas generalmente acompañadas de 
        frustración.';
        return $text;
    }

    function twoten(){
        $text = 'Las características principales 
        correspondientes a este perfil son las siguientes:
        \nSujetos ansiosos, temerosos, dependientes, inseguros 
        de sus propias capacidades, irritables, rencorosos, 
        depresivos, etc. Falta de memoria y concentración. 
        Quejas somáticas relacionadas con dolores digestivos, 
        vértigo y ataques de pérdida de conocimiento. 
        Disociación Cognoscitiva. Aislamiento social y falta de 
        compromiso. Si ambas escalas están muy elevadas sugieren 
        sujetos maníaco-depresivos, esquizofrénicos de tipo 
        esquizoafectivo, tendencias suicidas, etc.';
        return $text;
    }

    function fourten(){
        $text = 'Inmadurez, narcisismo, irritabilidad, rencor, 
        resentimiento, agresividad reprimida, dependencia, 
        necesidad de atención y afecto sólo para sí mismos. Las 
        mujeres manifiestan conductas femeninas estereotipadas. 
        Incomodidad en encuentros sociales y de pareja. 
        Dificultad para establecer compromisos emocionales y 
        matrimoniales. Deficiencia laboral. Como mecanismos de 
        defensa frecuentes se manifiestan racionalización, 
        negación y desplazamiento de la culpa hacia los demás. 
        En pacientes psiquiátricos generalmente se observa 
        diagnóstico de personalidad pasiva-agresiva, 
        esquizofrenia de tipo paranoide, depresión, 
        irritabilidad, ansiedad, quejas frecuentes de malestar 
        físico.';
        return $text;
    }

    function twoeleven(){
        $text = 'Se observan las siguientes características en 
        los sujetos 29/92: Narcisismo y egocentrismo. 
        Preocupación excesiva de logro y éxito que frecuentemente 
        desemboca en frustración. Crisis de identidad personal y 
        vocacional. Somatización. Utilizan el abuso a las bebidas 
        alcohólicas como escape a la realidad. Depresión 
        encubierta por actividad excesiva. Esta combinación es 
        muy frecuente en pacientes maníaco-depresivos o con daño 
        cerebral.';
        return $text;
    }

    function threeeleven(){
        $text = 'Las características principales correspondientes 
        a este perfil son las siguientes:\nAnsiedad, temor, 
        preocupación, fobias, depresión, irresponsabilidad, 
        inmadurez, dependencia, falta de decisión, iniciativa y 
        originalidad, pesimismo, apatía. Pensamiento turbado, 
        falta de memoria y concentración, extravagancia, 
        rumiación, alucinaciones, y / o delirios. Quejas físicas 
        y /o insomnio. Presencia de insight, pero mal pronóstico 
        en la psicoterapia.';
        return $text;
    }

    function foureleven(){
        $text = 'Preocupación y posterior indiferencia hacia las 
        consecuencias de los propios actos. Abuso de bebidas 
        alcohólicas, promiscuidad sexual seguidos de sentimientos 
        de culpa. Dependencia e inseguridad. Quejas frecuentes de 
        alestar físico. La psicoterapia puede ser favorable, 
        aunque se observan cambios impredecibles en la 
        personalidad.';
        return $text;
    }

    function twelve(){
        $text = 'Inadaptación, extravagancia, rebeldía, 
        convicciones radicales, impredecibles, impulsivos, 
        manipuladores, interesados, desconfiados, irritables, 
        rencorosos, pueden manifestar conductas antisociales, 
        agresivos, fríos y calculadores a la hora de pensar o 
        ejecutar un crimen, promiscuidad y desviación sexual, 
        adicción a drogas, y fracaso constante. Inseguridad, 
        predisposición al fracaso y dependencia son frecuentes, 
        cuadros suicidas, tendencia al aislamiento, culpan a 
        los demás por las consecuencias de sus propios actos. 
        Los individuos con perfil 48/84 manifiestan inseguridad 
        en relación con su propia sexualidad, conductas sexuales 
        agresivas y/o pensamientos constantes acerca del propio 
        desenvolvimiento sexual. En pacientes psiquiátricos 
        generalmente se observa diagnóstico de personalidad 
        antisocial o esquizoide, esquizofrenia de tipo paranoide, 
        y/o excentricismo.';
        return $text;
    }

    function thirteen(){
        $text = 'Rebeldía, conducta antisocial, promiscuidad, 
        adicciones, problemas de pareja, narcisismo, 
        impulsividad, desconfianza, irresponsabilidad, 
        delegación constante de las propias responsabilidades, 
        poca tolerancia al fracaso, irritabilidad, agresividad, 
        y resentimiento. Dificultades para establecer vínculos 
        profundos y sinceros. Crean una buena impresión al ser 
        conversadores, son muy activos. En pacientes 
        psiquiátricos generalmente se observan diagnósticos 
        maníaco-depresivos, trastorno de personalidad antisocial 
        e inestabilidad emocional.';
        return $text;
    }

    function fourteen(){
        $text = 'Se observan las siguientes características en 
        los sujetos 68/86: Inseguridad, dependencia, 
        aislamiento, extravagancia, falta de autoconfianza y 
        autoestima, apatía, y posibles tendencias suicidas. 
        Dificultad para comprometerse y establecer vínculos 
        emocionales con otras personas. En pacientes 
        psiquiátricos son comunes los trastornos de personalidad 
        esquizoides, esquizotípicos o paranoides, y 
        esquizofrenia.';
        return $text;
    }

    function sixfifteenn(){
        $text = 'Dependencia, vulnerabilidad ante el peligro 
        real o ficticio, ansiedad, irritabilidad, tendencia a 
        refugiarse en la fantasía, autocontrol seguido de 
        impulsividad son frecuentes. En pacientes psiquiátricos 
        es común la esquizofrenia paranoide, trastornos de 
        pensamiento, obsesiones, poca capacidad de concentración, 
        desorientación en el tiempo y el espacio.';
        return $text;
    }

    function sevenfifteen(){
        $text = 'Depresión ansiedad, confusión ante situaciones 
        nuevas son comunes. Inseguridad, dependencia, incapacidad 
        para relacionarse con el sexo opuesto, fantasías sexuales 
        frecuentes, bajo desempeño sexual. Trastornos 
        obsesivo-compulsivos, esquizoides, maníaco–depresivos son 
        comunes. Vale mencionar que mientras más elevada sea la 
        escala 8, más síntomas psicóticos tendrá el examinado.';
        return $text;
    }

    function seventeen(){
        $text = 'Infantilismo, egocentrismo, narcisismo, 
        dependientes, rencorosos y hostiles cuando no son 
        satisfechas sus demandas. Incapacidad de establecer 
        relaciones profundas con tendencia al aislamiento. 
        En examinados se observa adicción a drogas. En 
        psicoterapia se observa negación de los síntomas 
        perjudicando de esta manera el proceso psicoterapéutico. 
        Si las escalas son muy elevadas sugieren trastornos 
        psicóticos.';
        return $text;
    }

}
?>