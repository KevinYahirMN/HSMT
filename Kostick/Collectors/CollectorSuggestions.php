<?php

class CollectorSuggestions implements ICollector{
    function DAA($c){
        $daa = new DAAsuggestions;
        $suggestions = $daa->collect($c);
        return $suggestions;
    }

    function DV($c){
        $dv = new DVsuggestions;
        $suggestions = $dv->collect($c);
        return $suggestions;
    }

    function SES($c){
        $ses = new SESsuggestions;
        $suggestions = $ses->collect($c);
        return $suggestions;
    }
}

?>