<?php
include('basicScales/basicScalesMale.php');
include('basicScales/basicScaleMaleTScore.php');
include('basicScales/basicScaleFemaleTScore.php');
include('basicScales/basicScaleInterpretation.php');
include('basicScales/aditionalInterpretations.php');
include('FactorK.php');

include('SupplementaryScales/supplementaryScalesMale.php');
include('SupplementaryScales/supplementaryScaleMaleTScore.php');
include('SupplementaryScales/supplementaryScaleFemaleTScore.php');
include('SupplementaryScales/supplementaryScaleInterpretation.php');

include('ContentScales/contentScalesMale.php');
include('ContentScales/contentScalesMaleTScore.php');
include('ContentScales/contentScalesFemaleTScore.php');
include('ContentScales/contentScalesInterpretation.php');

class Connection{
    private $basicScale;
    private $basicscoreTMale;
    private $basicscoreTFemale;
    private $factorK;
    private $basicScaleInterpretation;
    private $AditionalInterpretation;

    private $supplementaryScale;
    private $supplementaryScoreTFemale;
    private $supplementaryScoreTMale;
    private $supplementaryScaleInterpretation;
    
    private $contentScale;
    private $contentScoreTFemale;
    private $contentScoreTMale;
    private $contentScaleInterpretation;

    private $answer;
    private $gender;
    private $cBasic;
    private $cSupplementary;
    private $cContent;

    function __construct(){
        if($this-> basicScale == null){
            $this->basicScale = new basicScalesMale();
            $this->basicscoreTMale = new basicscoreTMale();
            $this->basicscoreTFemale = new basicscoreTFemale();
            $this->factorK = new FactorK();
            $this->basicScaleInterpretation = new basicScaleInterpretation();
            $this->AditionalInterpretation = new aditionalInterpretation();

            $this->supplementaryScale = new supplementaryScalesMale();
            $this->supplementaryScoreTMale = new supplementaryScaleMaleTscore();
            $this->supplementaryScoreTFemale = new supplementaryScoreTFemale();
            $this->supplementaryScaleInterpretation = new supplementaryScaleInterpretation();
            
            $this->contentScale = new contentScalesMale();
            $this->contentScoreTFemale = new contentScoreTFemale();
            $this->contentScoreTMale = new contentScoreTMale();
            $this->contentScaleInterpretation = new contentScaleInterpretation();
        }
        
        $this->answer = $_SESSION['answer'];
        $this->gender = $_SESSION['gender'];
        //$postanswer = $_POST['Q'];
        //array_push($answer, $postanswer);
    }

    function scoreBasicScales(){
        $this->cBasic = array();
        array_push($this->cBasic, $this->basicScale->scale_L($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_F($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_K($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Hs($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_D($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Hi($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Dp($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Mf($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Pa($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Pt($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Es($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Ma($this->answer));
        array_push($this->cBasic, $this->basicScale->scale_Is($this->answer));
        
        $this->cBasic[3] = $this->factorK->sum5K($this->cBasic[3], $this->cBasic[2]);
        $this->cBasic[6] = $this->factorK->sum4K($this->cBasic[6], $this->cBasic[2]);
        $this->cBasic[9] = $this->factorK->sumK($this->cBasic[9], $this->cBasic[2]);
        $this->cBasic[10] = $this->factorK->sumK($this->cBasic[10], $this->cBasic[2]);
        $this->cBasic[11] = $this->factorK->sum2K($this->cBasic[11], $this->cBasic[2]);
        
        if($this->gender == 'Masculino'){
            $this->cBasic = $this->basicscoreTMale->valuesT($this->cBasic);
        }else{
            $this->cBasic = $this->basicscoreTFemale->valuesT($this->cBasic);
        }

        return $this->cBasic;
    }

    function scoreSupplementaryScales(){
        $this->cSupplementary = array();
        array_push($this->cSupplementary, $this->supplementaryScale->scale_A($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_R($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_Fyo($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_A_MAC($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_HR($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_Do($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_Rs($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_Dpr($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_GM($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_GF($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_EPK($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_EPS($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_ls1($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_ls2($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_ls3($this->answer));
        array_push($this->cSupplementary, $this->supplementaryScale->scale_Fp($this->answer));

        if($this->gender == 'Masculino'){
            $this->cSupplementary = $this->supplementaryScoreTMale->valuesT($this->cSupplementary);
        }else{
            $this->cSupplementary = $this->supplementaryScoreTFemale->valuesT($this->cSupplementary);
        }

        return $this->cSupplementary;
    }

    function scoreContentScales(){
        $this->cContent = array();
        array_push($this->cContent, $this->contentScale->scale_ANS($this->answer));
        array_push($this->cContent, $this->contentScale->scale_MIE($this->answer));
        array_push($this->cContent, $this->contentScale->scale_OBS($this->answer));
        array_push($this->cContent, $this->contentScale->scale_DEP($this->answer));
        array_push($this->cContent, $this->contentScale->scale_SAU($this->answer));
        array_push($this->cContent, $this->contentScale->scale_DEL($this->answer));
        array_push($this->cContent, $this->contentScale->scale_ENJ($this->answer));
        array_push($this->cContent, $this->contentScale->scale_CIN($this->answer));
        array_push($this->cContent, $this->contentScale->scale_PAS($this->answer));
        array_push($this->cContent, $this->contentScale->scale_PTA($this->answer));
        array_push($this->cContent, $this->contentScale->scale_BAE($this->answer));
        array_push($this->cContent, $this->contentScale->sclae_ISO($this->answer));
        array_push($this->cContent, $this->contentScale->scale_FAM($this->answer));
        array_push($this->cContent, $this->contentScale->scale_DTR($this->answer));
        array_push($this->cContent, $this->contentScale->scale_RTR($this->answer));

        if($this->gender == 'Masculino'){
            $this->cContent = $this->contentScoreTMale->valuesT($this->cContent);
        }else{
            $this->cContent = $this->contentScoreTFemale->valuesT($this->cContent);
        }

        return $this->cContent;
    }

    function interpretationBasicScales(){
        $suggestions = array();
        $suggestions = $this->basicScaleInterpretation->valuesT($this->cBasic);
        return $suggestions;
    }
    function interpretationAditional(){
        $suggestions = array();
        $suggestions = $this->AditionalInterpretation->maxScale($this->cBasic);
        return $suggestions;
    }

    function interpretationSupplementaryScales(){
        $suggestions = array();
        $suggestions = $this->supplementaryScaleInterpretation->valuesT($this->cSupplementary);
        return $suggestions;
    }

    function interpretationContentScales(){
        $suggestions = array();
        $suggestions = $this->contentScaleInterpretation->valuesT($this->cContent);
        return $suggestions;
    }

}
?>