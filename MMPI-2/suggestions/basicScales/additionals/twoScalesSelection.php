<?php
include_once('combinations/twoCombinations/suggestions_D_Pt.php');
include_once('combinations/twoCombinations/suggestions_Es_D.php');
include_once('combinations/twoCombinations/suggestions_Es_Dp.php');
include_once('combinations/twoCombinations/suggestions_Es_Ma.php');
include_once('combinations/twoCombinations/suggestions_Es_Pa.php');
include_once('combinations/twoCombinations/suggestions_Es_Pt.php');
include_once('combinations/twoCombinations/suggestions_Hi_D.php');
include_once('combinations/twoCombinations/suggestions_Hi_Dp.php');
include_once('combinations/twoCombinations/suggestions_Hi_Es.php');
include_once('combinations/twoCombinations/suggestions_Hi_Pa.php');
include_once('combinations/twoCombinations/suggestions_Hs_D.php');
include_once('combinations/twoCombinations/suggestions_Hs_Dp.php');
include_once('combinations/twoCombinations/suggestions_Hs_Es.php');
include_once('combinations/twoCombinations/suggestions_Hs_Hi.php');
include_once('combinations/twoCombinations/suggestions_Hs_Ma.php');
include_once('combinations/twoCombinations/suggestions_Ma_D.php');
include_once('combinations/twoCombinations/suggestions_Ma_Dp.php');
include_once('combinations/twoCombinations/suggestions_Ma_Pa.php');
include_once('combinations/twoCombinations/suggestions_Mf_Dp.php');
include_once('combinations/twoCombinations/suggestions_Pa_Dp.php');
include_once('combinations/twoCombinations/suggestions_Pt_Dp.php');

class twoScaleSelection{

    private $dpt;
    private $esd;
    private $esdp;
    private $esma;
    private $espa;
    private $espt;
    private $hid;
    private $hidp;
    private $hies;
    private $hipa;
    private $hsd;
    private $hsdp;
    private $hses;
    private $hshi;
    private $hsma;
    private $mad;
    private $madp;
    private $mapa;
    private $mfdp;
    private $padp;
    private $ptdp;

    function __construct()
    {
        $this->dpt = new suggestions_D_Pt;
        $this->esd = new suggestions_Es_D;
        $this->esdp = new suggestions_Es_Dp;
        $this->esma = new suggestions_Es_Ma;
        $this->espa = new suggestions_Es_Pa;
        $this->espt = new suggestions_Es_Pt;
        $this->hid = new suggestions_Hi_D;
        $this->hidp = new suggestions_Hi_Dp;
        $this->hies = new suggestions_Hi_Es;
        $this->hipa = new suggestions_Hi_Pa;
        $this->hsd = new suggestions_Hs_D;
        $this->hsdp = new suggestions_Hs_Dp;
        $this->hses = new suggestions_Hs_Es;
        $this->hshi = new suggestions_Hs_Hi;
        $this->hsma = new suggestions_Hs_Ma;
        $this->mad = new suggestions_ma_D;
        $this->madp = new suggestions_ma_Dp;
        $this->mapa = new suggestions_ma_Pa;
        $this->mfdp = new suggestions_mf_Dp;
        $this->padp = new suggestions_pa_Dp;
        $this->ptdp = new suggestions_pt_Dp;
    }

    function select($sum = 0, $fMax = 0){
        switch($sum){
            case 3:
                $text = $this->dpt->suggestions();
            break;
            case 4:
                $text = $this->hshi->suggestions();
            break;
            case 5:
                $text = $this->fivesubMenu($fMax);
            break;
            case 7:
                $text = $this->sevensubMenu($fMax);
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
                $text = $this->twelvesubMenu($fMax);
            break;
            case 13:
                $text = $this->thirteensubMenu($fMax);
            break;
            case 14:
                $text = $this->fourteensubMenu($fMax);
            break;
            case 15:
                $text = $this->fifteensubMenu($fMax);
            break;
            case 17:
                $text = $this->seventeensubMenu($fMax);
            break;
            default:
                $text = 'No se encontró patrón';
            break;
        }
        return $text;
    }

    function fivesubMenu($fMax){
        $text = $fMax == 1 || $fMax = 4 ? $this->hsdp->suggestions() : $this->hid->suggestions();

        return $text;
    }

    function sevensubMenu($fMax){
        $text = $fMax == 3 || $fMax == 4 ? $this->hidp->suggestions() : 'No se encontró patrón';

        return $text;
    }

    function ninesubMenu($fMax){
        switch($fMax){
            case 1:
                $text = $this->hses->suggestions();
            break;
            case 8:
                $text = $this->hses->suggestions();
            break;
            case 2:
                $text = $this->dpt->suggestions();
            break;
            case 7:
                $text = $this->dpt->suggestions();
            break;
            case 3:
                $text = $this->hipa->suggestions();
            break;
            case 6:
                $text = $this->hipa->suggestions();
            break;
            case 4:
                $text = $this->mfdp->suggestions();
            break;
            case 5:
                $text = $this->mfdp->suggestions();
            break;
        }
        return $text;
    }
    
    function tensubMenu($fMax){
        switch($fMax){
            case 1:
                $text = $this->hsma->suggestions();
            break;
            case 9:
                $text = $this->hsma->suggestions();
            break;
            case 2:
                $text = $this->esd->suggestions();
            break;
            case 8:
                $text = $this->esd->suggestions();
            break;
            case 4:
                $text = $this->padp->suggestions();
            break;
            case 6:
                $text = $this->padp->suggestions();
            break;
            default:
                $text = 'No se encontró patrón';
            break;
        }
        return $text;
    }

    function elevensubMenu($fMax){
        switch($fMax){
            case 2:
                $text = $this->mad->suggestions();
            break;
            case 9:
                $text = $this->mad->suggestions();
            break;
            case 3:
                $text = $this->hies->suggestions();
            break;
            case 8:
                $text = $this->hies->suggestions();
            break;
            case 4:
                $text = $this->ptdp->suggestions();
            break;
            case 7:
                $text = $this->ptdp->suggestions();
            break;
            default:
                $text = 'No se encontró patrón';
            break;
        }
        return $text;
    }

    function twelvesubMenu($fMax){
        $text = $fMax == 4 || $fMax == 8 ? $this->esdp->suggestions() : 'No se encontró patrón';

        return $text;
    }

    function thirteensubMenu($fMax){
        $text = $fMax == 9 || $fMax == 4 ? $this->madp->suggestions() : 'No se encontró patrón';

        return $text;
    }

    function fourteensubMenu($fMax){
        $text = $fMax == 6 || $fMax == 8 ? $this->espa->suggestions() : 'No se encontró patrón';
        return $text;
    }

    function fifteensubMenu($fMax){
        switch($fMax){
            case 6:
                $text = $this->mapa->suggestions();
            break;
            case 9:
                $text = $this->mapa->suggestions();
            break;
            case 7:
                $text = $this->espt->suggestions();
            break;
            case 8:
                $text = $this->espt->suggestions();
            break;
            default:
                $text = 'No se encontró patrón';
            break;
        }

        return $text;
    }

    function seventeensubMenu($fMax){
        $text = $fMax == 8 || $fMax == 9 ? $this->esma->suggestions() : 'No se encontró patrón';

        return $text;
    }

}
?>