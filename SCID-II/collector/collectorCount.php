<?php
include_once('../scales/scale_evitation.php');
include_once('../scales/scale_dependent.php');
include_once('../scales/scale_obsessive.php');
include_once('../scales/scale_passive_aggressive.php');
include_once('../scales/scale_passive-dependent.php');
include_once('../scales/scale_paranoid.php');
include_once('../scales/scale_schizotypal.php');
include_once('../scales/scale_schizoid.php');
include_once('../scales/scale_histrionic.php');
include_once('../scales/scale_narcissistic.php');
include_once('../scales/scale_limit.php');
include_once('../scales/scale_antisocial.php');

class CollectorCount{
    function evitation($answer){
        $evi = new scale_evitation;
        $c = $evi->scale($answer);
        return $c;
    }

    function dependent($answer){
        $dep = new scale_dependent;
        $c = $dep->scale($answer);
        return $c;
    }

    function obsessive($answer){
        $obs = new scale_obsessive;
        $c = $obs->scale($answer);
        return $c;
    }

    function passive_agressive($answer){
        $pa = new scale_passive_aggressive;
        $c = $pa->scale($answer);
        return $c;
    }

    function passive_dependent($answer){
        $pd = new scale_passive_dependent;
        $c = $pd->scale($answer);
        return $c;
    }

    function paranoid($answer){
        $p = new scale_paranoid;
        $c = $p->scale($answer);
        return $c;
    }

    function schizotypal($answer){
        $sch = new scale_schizotypal;
        $c = $sch->scale($answer);
        return $c;
    }

    function schizoid($answer){
        $sch = new scale_schizoid;
        $c = $sch->scale($answer);
        return $c;
    }

    function histrionic($answer){
        $h = new scale_histrionic;
        $c = $h->scale($answer);
        return $c;
    }

    function narcissistic($answer){
        $n = new scale_narcissistic;
        $c = $n->scale($answer);
        return $c;
    }

    function limit($answer){
        $l = new scale_limit;
        $c = $l->scale($answer);
        return $c;
    }

    function antisocial($answer){
        $ant = new scale_antisocial;
        $c = $ant->scale($answer);
        return $c;
    }
}

?>