<?php
include_once('suggestionsMMPI.php');
include_once('../suggestions/basicScales/suggestions_D.php');
include_once('../suggestions/basicScales/suggestions_Dp.php');
include_once('../suggestions/basicScales/suggestions_Es.php');
include_once('../suggestions/basicScales/suggestions_F.php');
include_once('../suggestions/basicScales/suggestions_Hi.php');
include_once('../suggestions/basicScales/suggestions_Hs.php');
include_once('../suggestions/basicScales/suggestions_Is.php');
include_once('../suggestions/basicScales/suggestions_K.php');
include_once('../suggestions/basicScales/suggestions_L.php');
include_once('../suggestions/basicScales/suggestions_Ma.php');
include_once('../suggestions/basicScales/suggestions_Mf_Female.php');
include_once('../suggestions/basicScales/suggestions_Mf_Male.php');
include_once('../suggestions/basicScales/suggestions_Pa.php');
include_once('../suggestions/basicScales/suggestions_Pt.php');

class basicSuggestion extends suggestionMMPI{

    private $d;
    private $dp;
    private $es;
    private $f;
    private $hi;
    private $hs;
    private $is;
    private $k;
    private $l;
    private $ma;
    private $mff;
    private $mfm;
    private $pa;
    private $pt;

    function __construct(){
        if($this->d == null){
            $this->d = new suggestions_D;
            $this->dp = new suggestions_Dp;
            $this->es = new suggestions_Es;
            $this->f = new suggestions_F;
            $this->hi = new suggestions_Hi;
            $this->hs = new suggestions_Hs;
            $this->is = new suggestions_Is;
            $this->k = new suggestions_K;
            $this->l = new suggestions_L;
            $this->ma = new suggestions_Ma;
            $this->mff = new suggestions_Mf_Female;
            $this->mfm = new suggestions_Mf_Male;
            $this->pa = new suggestions_Pa;
            $this->pt = new suggestions_Pt;
        
        }
    }

    function collect($score = array()){
        $suggestions = array(
            'd' => parent::suggestion($this->d, $score['d']),
            'dp' => parent::suggestion($this->dp, $score['dp']),
            'es' => parent::suggestion($this->es, $score['es']),
            'f' => parent::suggestion($this->f, $score['f']),
            'hi' => parent::suggestion($this->hi, $score['hi']),
            'hs' => parent::suggestion($this->hs, $score['hs']),
            'is' => parent::suggestion($this->is, $score['is']),
            'k' => parent::suggestion($this->k, $score['k']),
            'l' => parent::suggestion($this->l, $score['l']),
            'ma' => parent::suggestion($this->ma, $score['ma']),
            'pa' => parent::suggestion($this->pa, $score['pa']),
            'pt' => parent::suggestion($this->pt, $score['pt'])
        );

        if($_SESSION['gender'] == 'Masculino'){
            $count['mfm'] = parent::suggestion($this->mfm, $score['mfm']);
        }else{
            $count['mff'] = parent::suggestion($this->mff, $score['mff']);
        }

        return $suggestions;
    }
}
?>