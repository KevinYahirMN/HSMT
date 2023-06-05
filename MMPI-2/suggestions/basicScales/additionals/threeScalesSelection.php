<?php
include_once('combinations/threeCombinations/suggestions_D_Pt_Es.php');
include_once('combinations/threeCombinations/suggestions_D_Pt_Hi.php');
include_once('combinations/threeCombinations/suggestions_Es_D_Dp.php');
include_once('combinations/threeCombinations/suggestions_Es_Hs_D.php');
include_once('combinations/threeCombinations/suggestions_Hs_D_Hi.php');
include_once('combinations/threeCombinations/suggestions_Hs_Hi_D.php');
include_once('combinations/threeCombinations/suggestions_Hs_Hi_Es.php');
include_once('combinations/threeCombinations/suggestions_Hs_Hi_D.php');

class threeScaleSelection{

    private $dptes;
    private $dpthi;
    private $esddp;
    private $eshsd;
    private $hsdhi;
    private $hshies;
    private $hshid;

    function __construct()
    {
        $this->dptes = new suggestions_D_Pt_Es;
        $this->dpthi = new suggestions_D_Pt_Hi;
        $this->esddp = new suggestions_Es_D_Dp;
        $this->eshsd = new suggestions_Es_Hs_D;
        $this->hsdhi = new suggestions_Hs_D_Hi;
        $this->hshies = new suggestions_Hs_Hi_Es;
        $this->hshid = new suggestions_Hs_Hi_D;
    }

    function select($sum, $fcMax, $scMax){
        switch($sum){
            case 6:
                $text = $this->six($fcMax, $scMax);
            break;
            case 9:
                $text = $this->nine($fcMax, $scMax);
            break;
            case 11:
                $text = $this->eleven($fcMax, $scMax);
            break;
            case 12:
                $text = $this->twelve($fcMax, $scMax);
            break;
            case 14:
                $text = $this->fourteen($fcMax, $scMax);
            break;
            case 17:
                $text = $this->seventeen($fcMax, $scMax);
            break;
            default:
                $text = 'No se encontró patrón';
            break;
        }

        return $text;
    }

    function six($fcMax, $scMax){
        if($fcMax == 1){
            $text = $scMax == 2 ? $this->hsdhi->suggestions() : $this->hshid->suggestions();
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

    function nine($fcMax, $scMax){
        if($fcMax == 2){
            $text = $scMax == 7 ? $this->dpthi->suggestions() : 'No se encontró patrón';
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

    function eleven($fcMax, $scMax){
        if($fcMax == 8){
            $text = $scMax == 1 ? $this->eshsd->suggestions() : 'No se encontró patrón';
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

    function twelve($fcMax, $scMax){

        if($fcMax == 1){
            $text = $scMax == 3 ? $this->hshies->suggestions() : 'No se encontró patrón';
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

    function fourteen($fcMax, $scMax){

        if($fcMax == 8){
            $text = $scMax == 2 ? $this->esddp->suggestions() : 'No se encontró patrón';
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

    function seventeen($fcMax, $scMax){

        if($fcMax == 2){
            $text = $scMax == 7 ? $this->dptes->suggestions() : 'No se encontró patrón';
        }else{
            $text = 'No se encontró patrón';
        }

        return $text;
    }

}
?>