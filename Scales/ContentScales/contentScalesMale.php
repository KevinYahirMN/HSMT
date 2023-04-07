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
        $this->calif_True($answer[15]);
        $this->calif_True($answer[30]);
        $this->calif_True($answer[31]);
        $this->calif_True($answer[39]);
        $this->calif_False($answer[140]);
        $this->calif_True($answer[170]);
        $this->calif_True($answer[196]);
        $this->calif_False($answer[208]);
        $this->calif_False($answer[223]);
        $this->calif_True($answer[273]);
        $this->calif_True($answer[290]);
        $this->calif_True($answer[299]);
        $this->calif_True($answer[301]);
        $this->calif_True($answer[305]);
        $this->calif_True($answer[339]);
        $this->calif_False($answer[405]);
        $this->calif_True($answer[408]);
        $this->calif_True($answer[415]);
        $this->calif_True($answer[463]);
        $this->calif_True($answer[469]);
        $this->calif_False($answer[496]);
        $this->calif_True($answer[509]);
        $this->calif_True($answer[556]);
        return $this->c;
    }
    
    function scale_MIE($answer = array()){
        $this->c = 0;
        $this->calif_False($answer[115]);
        $this->calif_True($answer[154]);
        $this->calif_False($answer[163]);
        $this->calif_False($answer[186]);
        $this->calif_True($answer[317]);
        $this->calif_True($answer[322]);
        $this->calif_True($answer[329]);
        $this->calif_True($answer[334]);
        $this->calif_False($answer[385]);
        $this->calif_True($answer[392]);
        $this->calif_True($answer[395]);
        $this->calif_True($answer[397]);
        $this->calif_False($answer[401]);
        $this->calif_True($answer[435]);
        $this->calif_True($answer[438]);
        $this->calif_True($answer[441]);
        $this->calif_True($answer[447]);
        $this->calif_False($answer[453]);
        $this->calif_True($answer[458]);
        $this->calif_False($answer[562]);
        $this->calif_True($answer[458]);
        $this->calif_True($answer[471]);
        $this->calif_True($answer[555]);
        return $this->c;
    }

    function scale_OBS($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[55]);
        $this->calif_True($answer[87]);
        $this->calif_True($answer[135]);
        $this->calif_True($answer[196]);
        $this->calif_True($answer[309]);
        $this->calif_True($answer[313]);
        $this->calif_True($answer[327]);
        $this->calif_True($answer[328]);
        $this->calif_True($answer[394]);
        $this->calif_True($answer[442]);
        $this->calif_True($answer[482]);
        $this->calif_True($answer[491]);
        $this->calif_True($answer[497]);
        $this->calif_True($answer[509]);
        $this->calif_True($answer[547]);
        $this->calif_True($answer[553]);        
        return $this->c;
    }

    function scale_DEP($answer = array()){
        $this->c = 0;
        $this->calif_False($answer[3]);
        $this->calif_False($answer[9]);
        $this->calif_True($answer[38]);
        $this->calif_True($answer[52]);
        $this->calif_True($answer[56]);
        $this->calif_True($answer[65]);
        $this->calif_True($answer[71]);
        $this->calif_False($answer[75]);
        $this->calif_True($answer[82]);
        $this->calif_True($answer[92]);
        $this->calif_False($answer[95]);
        $this->calif_True($answer[130]);
        $this->calif_True($answer[146]);
        $this->calif_True($answer[215]);
        $this->calif_True($answer[234]);
        $this->calif_True($answer[246]);
        $this->calif_True($answer[277]);
        $this->calif_True($answer[303]);
        $this->calif_True($answer[306]);
        $this->calif_True($answer[331]);
        $this->calif_True($answer[377]);
        $this->calif_False($answer[388]);
        $this->calif_True($answer[399]);
        $this->calif_True($answer[400]);
        $this->calif_True($answer[411]);
        $this->calif_True($answer[454]);
        $this->calif_True($answer[506]);
        $this->calif_True($answer[512]);
        $this->calif_True($answer[516]);
        $this->calif_True($answer[520]);
        $this->calif_True($answer[539]);
        $this->calif_True($answer[546]);
        $this->calif_True($answer[554]);
        return $this->c;
    }

    function scale_SAU($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[11]);
        $this->calif_True($answer[18]);
        $this->calif_False($answer[20]);
        $this->calif_True($answer[28]);
        $this->calif_False($answer[33]);
        $this->calif_True($answer[36]);
        $this->calif_True($answer[40]);
        $this->calif_True($answer[44]);
        $this->calif_False($answer[45]);
        $this->calif_False($answer[47]);
        $this->calif_True($answer[53]);
        $this->calif_False($answer[57]);
        $this->calif_True($answer[59]);
        $this->calif_False($answer[91]);
        $this->calif_True($answer[97]);
        $this->calif_True($answer[101]);
        $this->calif_True($answer[111]);
        $this->calif_False($answer[117]);
        $this->calif_False($answer[118]);
        $this->calif_False($answer[141]);
        $this->calif_False($answer[142]);
        $this->calif_True($answer[149]);
        $this->calif_False($answer[159]);
        $this->calif_False($answer[164]);
        $this->calif_True($answer[175]);
        $this->calif_False($answer[176]);
        $this->calif_False($answer[179]);
        $this->calif_False($answer[181]);
        $this->calif_False($answer[194]);
        $this->calif_False($answer[204]);
        $this->calif_False($answer[224]);
        $this->calif_True($answer[247]);
        $this->calif_False($answer[249]);
        $this->calif_False($answer[255]);
        $this->calif_False($answer[295]);
        $this->calif_False($answer[404]);
        return $this->c;
    }

    function scale_DEL($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[24]);
        $this->calif_True($answer[32]);
        $this->calif_True($answer[60]);
        $this->calif_True($answer[96]);
        $this->calif_True($answer[138]);
        $this->calif_True($answer[162]);
        $this->calif_True($answer[198]);
        $this->calif_True($answer[228]);
        $this->calif_True($answer[259]);
        $this->calif_True($answer[298]);
        $this->calif_True($answer[311]);
        $this->calif_True($answer[316]);
        $this->calif_True($answer[319]);
        $this->calif_True($answer[332]);
        $this->calif_True($answer[336]);
        $this->calif_True($answer[355]);
        $this->calif_True($answer[361]);
        $this->calif_False($answer[427]);
        $this->calif_True($answer[466]);
        $this->calif_True($answer[490]);
        $this->calif_True($answer[508]);
        $this->calif_True($answer[547]);
        $this->calif_True($answer[551]);
        return $this-> c;
    }

    function scale_ENJ($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[29]);
        $this->calif_True($answer[37]);
        $this->calif_True($answer[116]);
        $this->calif_True($answer[134]);
        $this->calif_True($answer[302]);
        $this->calif_True($answer[389]);
        $this->calif_True($answer[410]);
        $this->calif_True($answer[414]);
        $this->calif_True($answer[430]);
        $this->calif_True($answer[461]);
        $this->calif_True($answer[486]);
        $this->calif_True($answer[513]);
        $this->calif_True($answer[540]);
        $this->calif_True($answer[542]);
        $this->calif_True($answer[548]);
        $this->calif_False($answer[564]);
        return $this-> c;
    }

    function scale_CIN($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[50]);
        $this->calif_True($answer[58]);
        $this->calif_True($answer[76]);
        $this->calif_True($answer[81]);
        $this->calif_True($answer[104]);
        $this->calif_True($answer[110]);
        $this->calif_True($answer[124]);
        $this->calif_True($answer[225]);
        $this->calif_True($answer[241]);
        $this->calif_True($answer[254]);
        $this->calif_True($answer[283]);
        $this->calif_True($answer[284]);
        $this->calif_True($answer[286]);
        $this->calif_True($answer[315]);
        $this->calif_True($answer[346]);
        $this->calif_True($answer[352]);
        $this->calif_True($answer[358]);
        $this->calif_True($answer[374]);
        $this->calif_True($answer[399]);
        $this->calif_True($answer[403]);
        $this->calif_True($answer[445]);
        $this->calif_True($answer[470]);
        $this->calif_True($answer[538]);
        return $this-> c;
    }

    function scale_PAS($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[26]);
        $this->calif_True($answer[35]);
        $this->calif_True($answer[66]);
        $this->calif_True($answer[81]);
        $this->calif_True($answer[84]);
        $this->calif_True($answer[104]);
        $this->calif_True($answer[105]);
        $this->calif_True($answer[110]);
        $this->calif_True($answer[123]);
        $this->calif_True($answer[227]);
        $this->calif_True($answer[240]);
        $this->calif_True($answer[248]);
        $this->calif_True($answer[250]);
        $this->calif_True($answer[254]);
        $this->calif_False($answer[266]);
        $this->calif_True($answer[269]);
        $this->calif_True($answer[283]);
        $this->calif_True($answer[284]);
        $this->calif_True($answer[374]);
        $this->calif_True($answer[412]);
        $this->calif_True($answer[418]);
        $this->calif_True($answer[419]);
        return $this-> c;
    }

    function scale_PTA($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[27]);
        $this->calif_True($answer[136]);
        $this->calif_True($answer[151]);
        $this->calif_True($answer[212]);
        $this->calif_True($answer[302]);
        $this->calif_True($answer[358]);
        $this->calif_True($answer[414]);
        $this->calif_True($answer[419]);
        $this->calif_True($answer[420]);
        $this->calif_True($answer[423]);
        $this->calif_True($answer[430]);
        $this->calif_True($answer[437]);
        $this->calif_True($answer[507]);
        $this->calif_True($answer[510]);
        $this->calif_True($answer[523]);
        $this->calif_True($answer[531]);
        $this->calif_True($answer[535]);
        $this->calif_True($answer[541]);
        $this->calif_True($answer[545]);
        return $this-> c;
    }

    function scale_BAE($answer = array()){
        $this-> c = 0;
        $this->calif_False($answer[61]);
        $this->calif_True($answer[70]);
        $this->calif_True($answer[73]);
        $this->calif_False($answer[78]);
        $this->calif_False($answer[109]);
        $this->calif_True($answer[130]);
        $this->calif_True($answer[235]);
        $this->calif_True($answer[326]);
        $this->calif_True($answer[369]);
        $this->calif_True($answer[376]);
        $this->calif_True($answer[380]);
        $this->calif_True($answer[411]);
        $this->calif_True($answer[421]);
        $this->calif_True($answer[450]);
        $this->calif_True($answer[457]);
        $this->calif_True($answer[475]);
        $this->calif_True($answer[476]);
        $this->calif_True($answer[483]);
        $this->calif_True($answer[485]);
        $this->calif_True($answer[503]);
        $this->calif_True($answer[504]);
        $this->calif_True($answer[519]);
        $this->calif_True($answer[526]);
        $this->calif_True($answer[562]);        
        return $this-> c;
    }

    function sclae_ISO($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[46]);
        $this->calif_False($answer[49]);
        $this->calif_False($answer[86]);
        $this->calif_True($answer[158]);
        $this->calif_True($answer[167]);
        $this->calif_True($answer[185]);
        $this->calif_False($answer[262]);
        $this->calif_True($answer[265]);
        $this->calif_True($answer[275]);
        $this->calif_False($answer[280]);
        $this->calif_True($answer[281]);
        $this->calif_False($answer[321]);
        $this->calif_True($answer[337]);
        $this->calif_False($answer[340]);
        $this->calif_True($answer[349]);
        $this->calif_False($answer[353]);
        $this->calif_False($answer[359]);
        $this->calif_False($answer[360]);
        $this->calif_False($answer[363]);
        $this->calif_True($answer[367]);
        $this->calif_False($answer[370]);
        $this->calif_True($answer[479]);
        $this->calif_True($answer[480]);
        $this->calif_True($answer[515]);
        return $this-> c;
    }

    function scale_FAM($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[21]);
        $this->calif_True($answer[54]);
        $this->calif_False($answer[83]);
        $this->calif_False($answer[125]);
        $this->calif_True($answer[145]);
        $this->calif_True($answer[190]);
        $this->calif_True($answer[195]);
        $this->calif_True($answer[205]);
        $this->calif_False($answer[217]);
        $this->calif_True($answer[256]);
        $this->calif_True($answer[292]);
        $this->calif_True($answer[300]);
        $this->calif_True($answer[323]);
        $this->calif_True($answer[378]);
        $this->calif_True($answer[379]);
        $this->calif_True($answer[382]);
        $this->calif_False($answer[383]);
        $this->calif_True($answer[413]);
        $this->calif_True($answer[449]);
        $this->calif_False($answer[455]);
        $this->calif_True($answer[478]);
        $this->calif_True($answer[543]);
        $this->calif_True($answer[550]);
        $this->calif_True($answer[563]);
        $this->calif_True($answer[566]);//SE LE RESTO 1
        return $this-> c;
    }

    function scale_DTR($answer = array()){
        $this-> c = 0;
        $this->calif_False($answer[10]);
        $this->calif_True($answer[15]);
        $this->calif_True($answer[17]);
        $this->calif_True($answer[31]);
        $this->calif_True($answer[54]);
        $this->calif_True($answer[73]);
        $this->calif_True($answer[98]);
        $this->calif_False($answer[108]);
        $this->calif_True($answer[135]);
        $this->calif_True($answer[233]);
        $this->calif_True($answer[243]);
        $this->calif_True($answer[299]);
        $this->calif_True($answer[302]);
        $this->calif_False($answer[318]);
        $this->calif_True($answer[339]);
        $this->calif_True($answer[364]);
        $this->calif_True($answer[368]);
        $this->calif_True($answer[394]);
        $this->calif_True($answer[409]);
        $this->calif_True($answer[428]);
        $this->calif_True($answer[445]);
        $this->calif_True($answer[464]);
        $this->calif_True($answer[491]);
        $this->calif_True($answer[505]);
        $this->calif_True($answer[509]);
        $this->calif_True($answer[517]);
        $this->calif_False($answer[521]);
        $this->calif_True($answer[525]);
        $this->calif_True($answer[545]);
        $this->calif_True($answer[554]);
        $this->calif_True($answer[559]);
        $this->calif_False($answer[561]);
        $this->calif_True($answer[566]);
        return $this-> c;
    }

    function scale_RTR($answer = array()){
        $this-> c = 0;
        $this->calif_True($answer[22]);
        $this->calif_True($answer[92]);
        $this->calif_True($answer[274]);
        $this->calif_True($answer[306]);
        $this->calif_True($answer[364]);
        $this->calif_True($answer[368]);
        $this->calif_True($answer[373]);
        $this->calif_True($answer[375]);
        $this->calif_True($answer[376]);
        $this->calif_True($answer[377]);
        $this->calif_True($answer[391]);
        $this->calif_True($answer[399]);
        $this->calif_True($answer[482]);
        $this->calif_True($answer[488]);
        $this->calif_True($answer[491]);
        $this->calif_False($answer[493]);
        $this->calif_False($answer[494]);
        $this->calif_True($answer[495]);
        $this->calif_True($answer[497]);
        $this->calif_True($answer[499]);
        $this->calif_True($answer[500]);
        $this->calif_False($answer[501]);
        $this->calif_True($answer[504]);
        $this->calif_True($answer[528]);
        $this->calif_True($answer[539]);
        $this->calif_True($answer[554]);
        return $this-> c;
    }
}
?>