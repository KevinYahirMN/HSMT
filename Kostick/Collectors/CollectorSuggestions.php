<?php
include('Suggestions/DAAsuggestions.php');
include('Suggestions/DVsuggestions.php');
include('Suggestions/SESsuggestions.php');

class CollectorSuggestions{
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