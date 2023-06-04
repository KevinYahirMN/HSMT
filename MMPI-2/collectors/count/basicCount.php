<?php
include_once('countMMPI.php');
include_once('../Scales/basicScales/scale_D.php');
include_once('../Scales/basicScales/scale_Dp.php');
include_once('../Scales/basicScales/scale_Es.php');
include_once('../Scales/basicScales/scale_F.php');
include_once('../Scales/basicScales/scale_Hi.php');
include_once('../Scales/basicScales/scale_Hs.php');
include_once('../Scales/basicScales/scale_Is.php');
include_once('../Scales/basicScales/scale_K.php');
include_once('../Scales/basicScales/scale_L.php');
include_once('../Scales/basicScales/scale_Ma.php');
include_once('../Scales/basicScales/scale_Mf_Female.php');
include_once('../Scales/basicScales/scale_Mf_Male.php');
include_once('../Scales/basicScales/scale_Pa.php');
include_once('../Scales/basicScales/scale_Pt.php');

class basicCount extends countMMPI{

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
            $this->d = new scale_D;
            $this->dp = new scale_Dp;
            $this->es = new scale_Es;
            $this->f = new scale_F;
            $this->hi = new scale_Hi;
            $this->hs = new scale_Hs;
            $this->is = new scale_Is;
            $this->k = new scale_K;
            $this->l = new scale_L;
            $this->ma = new scale_Ma;
            $this->mff = new scale_Mf_Female;
            $this->mfm = new scale_Mf_Male;
            $this->pa = new scale_Pa;
            $this->pt = new scale_Pt;
        
        }
    }

    function collect(){
        $count = [
            'd' => parent::revision($this->d),
            'dp' => parent::revision($this->dp),
            'es' => parent::revision($this->es),
            'f' => parent::revision($this->f),
            'hi' => parent::revision($this->hi),
            'hs' => parent::revision($this->hs),
            'is' => parent::revision($this->is),
            'k' => parent::revision($this->k),
            'l' => parent::revision($this->l),
            'ma' => parent::revision($this->ma),
            'pa' => parent::revision($this->pa),
            'pt' => parent::revision($this->pt)
        ];

        if($_SESSION['gender'] == 'Masculino'){
            $count['mf'] = parent::revision($this->mfm);
        }else{
            $count['mf'] = parent::revision($this->mff);
        }

        return $count;
    }
}
?>