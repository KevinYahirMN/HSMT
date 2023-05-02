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
        $c = 25*($evi->scale($answer));
        return $c;
    }

    function dependent($answer){
        $dep = new scale_dependent;
        $c = 20*$dep->scale($answer);
        return $c;
    }

    function obsessive($answer){
        $obs = new scale_obsessive;
        $c = 20*$obs->scale($answer);
        return $c;
    }

    function passive_agressive($answer){
        $pa = new scale_passive_aggressive;
        $c = 20*$pa->scale($answer);
        return $c;
    }

    function passive_dependent($answer){
        $pd = new scale_passive_dependent;
        $c = 20*$pd->scale($answer);
        return $c;
    }

    function paranoid($answer){
        $p = new scale_paranoid;
        $c = 25*$p->scale($answer);
        return $c;
    }

    function schizotypal($answer){
        $sch = new scale_schizotypal;
        $c = 20*$sch->scale($answer);
        return $c;
    }

    function schizoid($answer){
        $sch = new scale_schizoid;
        $c = 25*$sch->scale($answer);
        return $c;
    }

    function histrionic($answer){
        $h = new scale_histrionic;
        $c = 25*$h->scale($answer);
        return $c;
    }

    function narcissistic($answer){
        $n = new scale_narcissistic;
        $c = 16*$n->scale($answer);
        return $c;
    }

    function limit($answer){
        $l = new scale_limit;
        $c = 20*$l->scale($answer);
        return $c;
    }

    function antisocial($answer){
        $ant = new scale_antisocial;
        $c = 33*$ant->scale($answer);
        return $c;
    }
}

?>