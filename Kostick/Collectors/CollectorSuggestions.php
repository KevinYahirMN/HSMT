<?php

class CollectorSuggestions implements ICollector{
    function DAA($c){
        $daa = new DAAsuggestions;
        $suggestions = $daa->collect($c);
        return $suggestions;
    }

    function DV($c){
        $daa = new DVsuggestions;
        $suggestions = $daa->collect($c);
        return $suggestions;
    }

    function SES($c){
        $daa = new SESsuggestions;
        $suggestions = $daa->collect($c);
        return $suggestions;
    }
}

?>