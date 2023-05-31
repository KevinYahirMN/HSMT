<?php
include('Suggestions/DAAsuggestions.php');
include('Suggestions/DVsuggestions.php');
include('Suggestions/SESsuggestions.php');
include_once('../Interfaces/ICollector.php');

class CollectorSuggestions implements ICollector{
    function DAA($count = 0){
        $daa = new DAAsuggestions;
        $suggestions = $daa->collect($count);
        return $suggestions;
    }

    function DV($count = 0){
        $dv = new DVsuggestions;
        $suggestions = $dv->collect($count);
        return $suggestions;
    }

    function SES($count = 0){
        $ses = new SESsuggestions;
        $suggestions = $ses->collect($count);
        return $suggestions;
    }
}

?>