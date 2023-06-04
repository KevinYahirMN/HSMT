<?php
include_once('countMMPI.php');
include_once('../Scales/SupplementaryScales/scale_A.php');
include_once('../Scales/SupplementaryScales/scale_A_MAC.php');
include_once('../Scales/SupplementaryScales/scale_Do.php');
include_once('../Scales/SupplementaryScales/scale_Dpr.php');
include_once('../Scales/SupplementaryScales/scale_EPK.php');
include_once('../Scales/SupplementaryScales/scale_EPS.php');
include_once('../Scales/SupplementaryScales/scale_Fp.php');
include_once('../Scales/SupplementaryScales/scale_Fyo.php');
include_once('../Scales/SupplementaryScales/scale_GF.php');
include_once('../Scales/SupplementaryScales/scale_GM.php');
include_once('../Scales/SupplementaryScales/scale_HR.php');
include_once('../Scales/SupplementaryScales/scale_ls1.php');
include_once('../Scales/SupplementaryScales/scale_ls2.php');
include_once('../Scales/SupplementaryScales/scale_ls3.php');
include_once('../Scales/SupplementaryScales/scale_R.php');
include_once('../Scales/SupplementaryScales/scale_Rs.php');

class supplementaryCount extends countMMPI{
    private $a;
    private $a_mac;
    private $do;
    private $dpr;
    private $epk;
    private $eps;
    private $fp;
    private $fyo;
    private $gf;
    private $gm;
    private $hr;
    private $ls1;
    private $ls2;
    private $ls3;
    private $r;
    private $rs;

    function __construct(){
        if($this->a == null){
            $this->a = new scale_A;
            $this->a_mac = new scale_A_Mac;
            $this->do = new scale_Do;
            $this->dpr = new scale_Do;
            $this->epk = new scale_Epk;
            $this->eps = new scale_Eps;
            $this->fp = new scale_Fp;
            $this->fyo = new scale_Fyo;
            $this->gf = new scale_Gf;
            $this->gm = new scale_Gm;
            $this->hr = new scale_Hr;
            $this->ls1 = new scale_Ls1;
            $this->ls2 = new scale_Ls2;
            $this->ls3 = new scale_Ls3;
            $this->r = new scale_R;
            $this->rs = new scale_Rs;
        }
    }

    function collect(){
        $count = array(
            'a' => parent::revision($this->a),
            'a_mac' => parent::revision($this->a_mac),
            'do' => parent::revision($this->do),
            'dpr' => parent::revision($this->dpr),
            'epk' => parent::revision($this->epk),
            'eps' => parent::revision($this->eps),
            'fp' => parent::revision($this->fp),
            'fyo' => parent::revision($this->fyo),
            'gf' => parent::revision($this->gf),
            'gm' => parent::revision($this->gm),
            'hr' => parent::revision($this->hr),
            'ls1' => parent::revision($this->ls1),
            'ls2' => parent::revision($this->ls2),
            'ls3' => parent::revision($this->ls3),
            'r' => parent::revision($this->r),
            'rs' => parent::revision($this->rs)
        );
        return $count;
    }
}
?>