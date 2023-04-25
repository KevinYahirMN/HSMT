<?php
class contentScalesMale{
    private $c;

    function calif_True($answer){
        if($answer == 'true'){
            $this->c++;
        }
    }

    function calif_False($answer){
        if($answer == 'false'){
            $this->c++;
        }
    }

    function scale_ANS($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[14]);
        $this->calif_True($answer[29]);
        $this->calif_True($answer[30]);
        $this->calif_True($answer[38]);
        $this->calif_False($answer[139]);
        $this->calif_True($answer[169]);
        $this->calif_True($answer[195]);
        $this->calif_False($answer[207]);
        $this->calif_False($answer[222]);
        $this->calif_True($answer[272]);
        $this->calif_True($answer[289]);
        $this->calif_True($answer[298]);
        $this->calif_True($answer[300]);
        $this->calif_True($answer[304]);
        $this->calif_True($answer[338]);
        $this->calif_False($answer[404]);
        $this->calif_True($answer[407]);
        $this->calif_True($answer[414]);
        $this->calif_True($answer[462]);
        $this->calif_True($answer[468]);
        $this->calif_False($answer[495]);
        $this->calif_True($answer[508]);
        $this->calif_True($answer[555]);
        return $this->c;
    }
    
    function scale_MIE($answer = array()){
        $this->c = 0;
        $this->calif_False($answer[114]);
        $this->calif_True($answer[153]);
        $this->calif_False($answer[162]);
        $this->calif_False($answer[185]);
        $this->calif_True($answer[316]);
        $this->calif_True($answer[321]);
        $this->calif_True($answer[328]);
        $this->calif_True($answer[333]);
        $this->calif_False($answer[384]);
        $this->calif_True($answer[391]);
        $this->calif_True($answer[394]);
        $this->calif_True($answer[396]);
        $this->calif_False($answer[400]);
        $this->calif_True($answer[434]);
        $this->calif_True($answer[437]);
        $this->calif_True($answer[440]);
        $this->calif_True($answer[446]);
        $this->calif_False($answer[452]);
        $this->calif_True($answer[457]);
        $this->calif_False($answer[561]);
        $this->calif_True($answer[467]);
        $this->calif_True($answer[470]);
        $this->calif_True($answer[554]);
        return $this->c;
    }

    function scale_OBS($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[54]);
        $this->calif_True($answer[86]);
        $this->calif_True($answer[134]);
        $this->calif_True($answer[195]);
        $this->calif_True($answer[308]);
        $this->calif_True($answer[312]);
        $this->calif_True($answer[326]);
        $this->calif_True($answer[327]);
        $this->calif_True($answer[393]);
        $this->calif_True($answer[441]);
        $this->calif_True($answer[481]);
        $this->calif_True($answer[490]);
        $this->calif_True($answer[496]);
        $this->calif_True($answer[508]);
        $this->calif_True($answer[546]);
        $this->calif_True($answer[552]);        
        return $this->c;
    }

    function scale_DEP($answer = array()){
        $this->c = 0;
        $this->calif_False($answer[2]);
        $this->calif_False($answer[8]);
        $this->calif_True($answer[37]);
        $this->calif_True($answer[51]);
        $this->calif_True($answer[55]);
        $this->calif_True($answer[64]);
        $this->calif_True($answer[70]);
        $this->calif_False($answer[74]);
        $this->calif_True($answer[81]);
        $this->calif_True($answer[91]);
        $this->calif_False($answer[94]);
        $this->calif_True($answer[129]);
        $this->calif_True($answer[145]);
        $this->calif_True($answer[214]);
        $this->calif_True($answer[233]);
        $this->calif_True($answer[245]);
        $this->calif_True($answer[276]);
        $this->calif_True($answer[302]);
        $this->calif_True($answer[305]);
        $this->calif_True($answer[330]);
        $this->calif_True($answer[376]);
        $this->calif_False($answer[387]);
        $this->calif_True($answer[398]);
        $this->calif_True($answer[399]);
        $this->calif_True($answer[410]);
        $this->calif_True($answer[453]);
        $this->calif_True($answer[505]);
        $this->calif_True($answer[511]);
        $this->calif_True($answer[515]);
        $this->calif_True($answer[519]);
        $this->calif_True($answer[538]);
        $this->calif_True($answer[545]);
        $this->calif_True($answer[553]);
        return $this->c;
    }

    function scale_SAU($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[10]);
        $this->calif_True($answer[17]);
        $this->calif_False($answer[19]);
        $this->calif_True($answer[27]);
        $this->calif_False($answer[32]);
        $this->calif_True($answer[35]);
        $this->calif_True($answer[39]);
        $this->calif_True($answer[43]);
        $this->calif_False($answer[44]);
        $this->calif_False($answer[46]);
        $this->calif_True($answer[52]);
        $this->calif_False($answer[56]);
        $this->calif_True($answer[58]);
        $this->calif_False($answer[90]);
        $this->calif_True($answer[96]);
        $this->calif_True($answer[100]);
        $this->calif_True($answer[110]);
        $this->calif_False($answer[116]);
        $this->calif_False($answer[117]);
        $this->calif_False($answer[140]);
        $this->calif_False($answer[141]);
        $this->calif_True($answer[148]);
        $this->calif_False($answer[158]);
        $this->calif_False($answer[163]);
        $this->calif_True($answer[174]);
        $this->calif_False($answer[175]);
        $this->calif_False($answer[178]);
        $this->calif_False($answer[180]);
        $this->calif_False($answer[193]);
        $this->calif_False($answer[203]);
        $this->calif_False($answer[223]);
        $this->calif_True($answer[246]);
        $this->calif_False($answer[248]);
        $this->calif_False($answer[254]);
        $this->calif_False($answer[294]);
        $this->calif_False($answer[403]);
        return $this->c;
    }

    function scale_DEL($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[23]);
        $this->calif_True($answer[31]);
        $this->calif_True($answer[59]);
        $this->calif_True($answer[95]);
        $this->calif_True($answer[137]);
        $this->calif_True($answer[161]);
        $this->calif_True($answer[197]);
        $this->calif_True($answer[227]);
        $this->calif_True($answer[258]);
        $this->calif_True($answer[297]);
        $this->calif_True($answer[310]);
        $this->calif_True($answer[315]);
        $this->calif_True($answer[318]);
        $this->calif_True($answer[332]);
        $this->calif_True($answer[335]);
        $this->calif_True($answer[354]);
        $this->calif_True($answer[360]);
        $this->calif_False($answer[426]);
        $this->calif_True($answer[465]);
        $this->calif_True($answer[489]);
        $this->calif_True($answer[507]);
        $this->calif_True($answer[542]);
        $this->calif_True($answer[550]);
        return $this->c;
    }

    function scale_ENJ($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[28]);
        $this->calif_True($answer[36]);
        $this->calif_True($answer[115]);
        $this->calif_True($answer[133]);
        $this->calif_True($answer[301]);
        $this->calif_True($answer[388]);
        $this->calif_True($answer[409]);
        $this->calif_True($answer[413]);
        $this->calif_True($answer[429]);
        $this->calif_True($answer[460]);
        $this->calif_True($answer[485]);
        $this->calif_True($answer[512]);
        $this->calif_True($answer[539]);
        $this->calif_True($answer[541]);
        $this->calif_True($answer[547]);
        $this->calif_False($answer[563]);
        return $this->c;
    }

    function scale_CIN($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[49]);
        $this->calif_True($answer[57]);
        $this->calif_True($answer[75]);
        $this->calif_True($answer[80]);
        $this->calif_True($answer[103]);
        $this->calif_True($answer[109]);
        $this->calif_True($answer[123]);
        $this->calif_True($answer[224]);
        $this->calif_True($answer[240]);
        $this->calif_True($answer[253]);
        $this->calif_True($answer[282]);
        $this->calif_True($answer[283]);
        $this->calif_True($answer[285]);
        $this->calif_True($answer[314]);
        $this->calif_True($answer[345]);
        $this->calif_True($answer[351]);
        $this->calif_True($answer[357]);
        $this->calif_True($answer[373]);
        $this->calif_True($answer[398]);
        $this->calif_True($answer[402]);
        $this->calif_True($answer[444]);
        $this->calif_True($answer[469]);
        $this->calif_True($answer[537]);
        return $this->c;
    }

    function scale_PAS($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[25]);
        $this->calif_True($answer[34]);
        $this->calif_True($answer[65]);
        $this->calif_True($answer[80]);
        $this->calif_True($answer[83]);
        $this->calif_True($answer[103]);
        $this->calif_True($answer[104]);
        $this->calif_True($answer[109]);
        $this->calif_True($answer[122]);
        $this->calif_True($answer[226]);
        $this->calif_True($answer[239]);
        $this->calif_True($answer[247]);
        $this->calif_True($answer[249]);
        $this->calif_True($answer[253]);
        $this->calif_False($answer[265]);
        $this->calif_True($answer[268]);
        $this->calif_True($answer[282]);
        $this->calif_True($answer[283]);
        $this->calif_True($answer[373]);
        $this->calif_True($answer[411]);
        $this->calif_True($answer[417]);
        $this->calif_True($answer[418]);
        return $this->c;
    }

    function scale_PTA($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[26]);
        $this->calif_True($answer[135]);
        $this->calif_True($answer[150]);
        $this->calif_True($answer[211]);
        $this->calif_True($answer[301]);
        $this->calif_True($answer[357]);
        $this->calif_True($answer[413]);
        $this->calif_True($answer[418]);
        $this->calif_True($answer[419]);
        $this->calif_True($answer[422]);
        $this->calif_True($answer[429]);
        $this->calif_True($answer[436]);
        $this->calif_True($answer[506]);
        $this->calif_True($answer[509]);
        $this->calif_True($answer[522]);
        $this->calif_True($answer[530]);
        $this->calif_True($answer[534]);
        $this->calif_True($answer[540]);
        $this->calif_True($answer[544]);
        return $this->c;
    }

    function scale_BAE($answer = array()){
        $this-> c = 0;
        $this->calif_False($answer[60]);
        $this->calif_True($answer[69]);
        $this->calif_True($answer[72]);
        $this->calif_False($answer[77]);
        $this->calif_False($answer[108]);
        $this->calif_True($answer[129]);
        $this->calif_True($answer[234]);
        $this->calif_True($answer[325]);
        $this->calif_True($answer[368]);
        $this->calif_True($answer[375]);
        $this->calif_True($answer[379]);
        $this->calif_True($answer[410]);
        $this->calif_True($answer[420]);
        $this->calif_True($answer[449]);
        $this->calif_True($answer[456]);
        $this->calif_True($answer[474]);
        $this->calif_True($answer[475]);
        $this->calif_True($answer[482]);
        $this->calif_True($answer[484]);
        $this->calif_True($answer[502]);
        $this->calif_True($answer[503]);
        $this->calif_True($answer[518]);
        $this->calif_True($answer[525]);
        $this->calif_True($answer[561]);        
        return $this->c;
    }

    function sclae_ISO($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[45]);
        $this->calif_False($answer[48]);
        $this->calif_False($answer[85]);
        $this->calif_True($answer[157]);
        $this->calif_True($answer[166]);
        $this->calif_True($answer[184]);
        $this->calif_False($answer[261]);
        $this->calif_True($answer[264]);
        $this->calif_True($answer[274]);
        $this->calif_False($answer[279]);
        $this->calif_True($answer[280]);
        $this->calif_False($answer[320]);
        $this->calif_True($answer[336]);
        $this->calif_False($answer[339]);
        $this->calif_True($answer[348]);
        $this->calif_False($answer[352]);
        $this->calif_False($answer[358]);
        $this->calif_False($answer[359]);
        $this->calif_False($answer[362]);
        $this->calif_True($answer[366]);
        $this->calif_False($answer[369]);
        $this->calif_True($answer[478]);
        $this->calif_True($answer[479]);
        $this->calif_True($answer[514]);
        return $this->c;
    }

    function scale_FAM($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[20]);
        $this->calif_True($answer[53]);
        $this->calif_False($answer[82]);
        $this->calif_False($answer[124]);
        $this->calif_True($answer[144]);
        $this->calif_True($answer[189]);
        $this->calif_True($answer[194]);
        $this->calif_True($answer[204]);
        $this->calif_False($answer[216]);
        $this->calif_True($answer[255]);
        $this->calif_True($answer[291]);
        $this->calif_True($answer[299]);
        $this->calif_True($answer[322]);
        $this->calif_True($answer[377]);
        $this->calif_True($answer[378]);
        $this->calif_True($answer[381]);
        $this->calif_False($answer[382]);
        $this->calif_True($answer[412]);
        $this->calif_True($answer[448]);
        $this->calif_False($answer[454]);
        $this->calif_True($answer[477]);
        $this->calif_True($answer[542]);
        $this->calif_True($answer[549]);
        $this->calif_True($answer[562]);
        $this->calif_True($answer[566]);
        return $this->c;
    }

    function scale_DTR($answer = array()){
        $this-> c = 0;
        $this->calif_False($answer[9]);
        $this->calif_True($answer[14]);
        $this->calif_True($answer[16]);
        $this->calif_True($answer[30]);
        $this->calif_True($answer[53]);
        $this->calif_True($answer[72]);
        $this->calif_True($answer[97]);
        $this->calif_False($answer[107]);
        $this->calif_True($answer[134]);
        $this->calif_True($answer[232]);
        $this->calif_True($answer[242]);
        $this->calif_True($answer[298]);
        $this->calif_True($answer[301]);
        $this->calif_False($answer[317]);
        $this->calif_True($answer[338]);
        $this->calif_True($answer[363]);
        $this->calif_True($answer[367]);
        $this->calif_True($answer[393]);
        $this->calif_True($answer[408]);
        $this->calif_True($answer[427]);
        $this->calif_True($answer[444]);
        $this->calif_True($answer[463]);
        $this->calif_True($answer[490]);
        $this->calif_True($answer[504]);
        $this->calif_True($answer[508]);
        $this->calif_True($answer[516]);
        $this->calif_False($answer[520]);
        $this->calif_True($answer[524]);
        $this->calif_True($answer[544]);
        $this->calif_True($answer[553]);
        $this->calif_True($answer[558]);
        $this->calif_False($answer[560]);
        $this->calif_True($answer[565]);
        return $this->c;
    }

    function scale_RTR($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[21]);
        $this->calif_True($answer[91]);
        $this->calif_True($answer[273]);
        $this->calif_True($answer[305]);
        $this->calif_True($answer[363]);
        $this->calif_True($answer[367]);
        $this->calif_True($answer[372]);
        $this->calif_True($answer[374]);
        $this->calif_True($answer[375]);
        $this->calif_True($answer[376]);
        $this->calif_True($answer[390]);
        $this->calif_True($answer[398]);
        $this->calif_True($answer[481]);
        $this->calif_True($answer[487]);
        $this->calif_True($answer[490]);
        $this->calif_False($answer[492]);
        $this->calif_False($answer[493]);
        $this->calif_True($answer[494]);
        $this->calif_True($answer[496]);
        $this->calif_True($answer[498]);
        $this->calif_True($answer[499]);
        $this->calif_False($answer[500]);
        $this->calif_True($answer[503]);
        $this->calif_True($answer[527]);
        $this->calif_True($answer[538]);
        $this->calif_True($answer[553]);
        return $this->c;
    }
}
?>