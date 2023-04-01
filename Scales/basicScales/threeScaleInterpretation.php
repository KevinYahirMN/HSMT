<?php
class threeInterpretation{
    function maxScale($scales = array()){
        $Max = 0;
        $sMax = 0;
        $tMax = 0;
        $fMax = 0;
        $cMax = 0;
        $scMax = 0;
        $tcMax = 0;
        $fcMax = 0;
        $i = 3;
        while($i < count($scales)){
            switch($i){
                case $scales[$i] > $Max:
                    $fMax = $tMax;
                    $tMax = $sMax;
                    $sMax = $Max;
                    $fcMax = $tcMax;
                    $tcMax = $scMax;
                    $scMax = $cMax;
                    $Max = $scales[$i];
                    $cMax = $i - 2;
                break;
                case $scales[$i] > $sMax:
                    $fMax = $tMax;
                    $tMax = $sMax;
                    $sMax = $scales[$i];
                    $fcMax = $tcMax;
                    $tcMax = $scMax;
                    $scMax = $i - 2;
                break;
                case $scales[$i] > $tMax:
                    $fMax = $tMax;
                    $tMax = $scales[$i];
                    $fcMax = $tcMax;
                    $tcMax = $i - 2; 
                break;
                case $scales[$i] > $fMax:
                    $fMax = $scales[$i];
                    $fcMax = $i - 2;                    
                break;
            }
            $i++;
        }
        $sum = $cMax + $scMax + $tcMax;

        $text = $this->threeSuggestionMenu($sum, $cMax, $scMax, $fcMax);

        return $text;

    }

    function threesuggestionMenu($sum, $cMax, $scMax, $fcMax){
        $text = 'No aplica';
        switch($sum){
            case 6:
                $text = $this->sixOption($scMax);
            break;
            case 9:
                $text = $this->nine();
            break;
            case 11:
                $text = $this->elven();
            break;
            case 12:
                $text = $this->twelve();
            break;
            case 14:
                $text = $this->fourteen();
            break;
            case 17:
                $text = $this->seventeen();
            break;
        }
        return $text;
    }

    function sixOption($scMax){
        if($scMax == 2){
            $text = $this->sixTwo();
        }else{
            $text = $this->sixThree();
        }
        return $text;
    }

    function sixTwo(){
        $text = 'Síntomas pertenecientes a la Hipocondría, 
        ansiedad, poca autoconfianza, tendencia al 
        aislamiento, convicciones rígidas. Es común la 
        somatización para obtener beneficios primarios o 
        secundarios.';
        return $text;
    }

    function sixThree(){
        $text = 'Sujetos pasivo-dependientes, ansiosos, 
        extrovertidos, simpáticos, irritables, manifiestan 
        cuadros somáticos para obtener beneficios secundarios 
        o primarios. Bajo nivel de adaptabilidad ante 
        situaciones nuevas y agresividad reprimida son 
        frecuentes.';
        return $text;
    }

    function nine(){
        $text = 'Ansiedad, perfeccionismo, obsesión por el 
        orden y la limpieza, rigidez, vulnerabilidad ante 
        grandes responsabilidades, baja autoestima, 
        tendencias suicidas, agresividad, depresión, 
        trastorno de sueño, dificultad para establecer 
        relaciones profundas y adicciones son características 
        frecuentes en los sujetos pertenecientes a este 
        perfil.';
        return $text;
    }

    function elven(){
        $text = 'CI más bajo del común cuando L es superior a 
        T 70. Hostilidad, poca capacidad de adaptabilidad, 
        aislamiento y confusión mental son frecuentes. 
        En pacientes psiquiátricos es común el trastorno de 
        personalidad esquizoide, esquizofrenia simple, 
        paranoide o crónica.';
        return $text;
    }

    function twelve(){
        $text = 'Hostilidad, ansiedad, tendencias suicidas, 
        convicciones rígidas, celos, suspicacia y 
        desconfianza son muy comunes en las personas 
        pertenecientes a este perfil. En pacientes 
        psiquiátricos es común la esquizofrenia de tipo 
        paranoide. Mal pronóstico en psicoterapia.';
        return $text;
    }

    function fourteen(){
        $text = 'Inmadurez, irritabilidad, agresividad, 
        desconfianza, gusto por las bebidas alcohólicas, 
        dificultad para establecer relaciones de pareja e 
        irresponsabilidad son frecuentes. Se observa con 
        frecuencia este perfil en pacientes con trastornos 
        paranoides.';
        return $text;
    }

    function seventeen(){
        $text = 'Conductas particulares de sujetos 
        esquizoides, depresión, obsesiones, falta de 
        concentración son frecuentes. Este perfil 
        generalmente es obtenido por sujetos heterosexuales.';
        return $text;
    }
}
?>