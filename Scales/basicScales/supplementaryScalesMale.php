<?php
//Sumales 1 por naco estupido
//Perfil de escalas suplementarias MMPI-2

class supplementaryScalesMale{

   private $c = 0;

   function __construct(){
   }

   //sumatoria de respuesta verdadero
   function calif_True($answer){
      if($answer == 'true'){
         $this->c++;
      }
   }
   
   //Sumatoria de respuesta falso
   function calif_False($answer){
     if($answer == 'false'){
         $this->c++;
     }
   }

   function scale_A($answer = array()){
      $this->calif_True($answer[31]);
      $this->calif_True($answer[38]);
      $this->calif_True($answer[56]);
      $this->calif_True($answer[65]);
      $this->calif_True($answer[82]);
      $this->calif_True($answer[127]);
      $this->calif_True($answer[135]);
      $this->calif_True($answer[215]);
      $this->calif_True($answer[233]);
      $this->calif_True($answer[243]);
      $this->calif_True($answer[251]);
      $this->calif_True($answer[273]);
      $this->calif_True($answer[277]);
      $this->calif_True($answer[289]);
      $this->calif_True($answer[301]);
      $this->calif_True($answer[309]);
      $this->calif_True($answer[310]);
      $this->calif_True($answer[311]);
      $this->calif_True($answer[325]);
      $this->calif_True($answer[338]);
      $this->calif_True($answer[339]);
      $this->calif_True($answer[341]);
      $this->calif_True($answer[347]);
      $this->calif_False($answer[388]);
      $this->calif_True($answer[390]);
      $this->calif_True($answer[391]);
      $this->calif_True($answer[392]);
      $this->calif_True($answer[400]);
      $this->calif_True($answer[408]);
      $this->calif_True($answer[411]);
      $this->calif_True($answer[415]);
      $this->calif_True($answer[421]);
      $this->calif_True($answer[428]);
      $this->calif_True($answer[442]);
      $this->calif_True($answer[448]);
      $this->calif_True($answer[451]);
      $this->calif_True($answer[464]);
      $this->calif_True($answer[469]);
      return $this->c;
   }

   function scale_R($answer = array()){
    $this->calif_False($answer[1]);
    $this->calif_False($answer[7]);
    $this->calif_False($answer[10]);
    $this->calif_False($answer[14]);
    $this->calif_False($answer[37]);
    $this->calif_False($answer[45]);
    $this->calif_False($answer[69]);
    $this->calif_False($answer[112]);
    $this->calif_False($answer[118]);
    $this->calif_False($answer[120]);
    $this->calif_False($answer[129]);
    $this->calif_False($answer[134]);
    $this->calif_False($answer[142]);
    $this->calif_False($answer[168]);
    $this->calif_False($answer[178]);
    $this->calif_False($answer[189]);
    $this->calif_False($answer[197]);
    $this->calif_False($answer[199]);
    $this->calif_False($answer[248]);
    $this->calif_False($answer[255]);
    $this->calif_False($answer[256]);
    $this->calif_False($answer[297]);
    $this->calif_False($answer[330]);
    $this->calif_False($answer[346]);
    $this->calif_False($answer[350]);
    $this->calif_False($answer[353]);
    $this->calif_False($answer[359]);
    $this->calif_False($answer[363]);
    $this->calif_False($answer[365]);
    $this->calif_False($answer[422]);
    $this->calif_False($answer[423]);
    $this->calif_False($answer[430]);
    $this->calif_False($answer[432]);
    $this->calif_False($answer[449]);
    $this->calif_False($answer[456]);
    $this->calif_False($answer[465]);
    return $this->c;
 }

 function scale_Fyo($answer = array()){
    $this->calif_True($answer[2]);
    $this->calif_False($answer[21]);
    $this->calif_False($answer[31]);
    $this->calif_False($answer[32]);
    $this->calif_True($answer[33]);
    $this->calif_False($answer[36]);
    $this->calif_False($answer[39]);
    $this->calif_True($answer[45]);
    $this->calif_False($answer[53]);
    $this->calif_False($answer[60]);
    $this->calif_False($answer[70]);
    $this->calif_False($answer[82]);
    $this->calif_False($answer[87]);
    $this->calif_True($answer[98]);
    $this->calif_False($answer[119]);
    $this->calif_False($answer[128]);
    $this->calif_True($answer[141]);
    $this->calif_True($answer[159]);
    $this->calif_True($answer[169]);
    $this->calif_False($answer[175]);
    $this->calif_True($answer[177]);
    $this->calif_True($answer[179]);
    $this->calif_True($answer[189]);
    $this->calif_False($answer[196]);
    $this->calif_True($answer[199]);
    $this->calif_True($answer[209]);
    $this->calif_True($answer[213]);
    $this->calif_False($answer[221]);
    $this->calif_False($answer[225]);
    $this->calif_False($answer[229]);
    $this->calif_True($answer[230]);
    $this->calif_False($answer[236]);
    $this->calif_True($answer[245]);
    $this->calif_False($answer[246]);
    $this->calif_False($answer[307]);
    $this->calif_False($answer[310]);
    $this->calif_False($answer[316]);
    $this->calif_True($answer[323]);
    $this->calif_False($answer[328]);
    $this->calif_True($answer[385]);
    $this->calif_False($answer[391]);
    $this->calif_False($answer[394]);
    $this->calif_True($answer[406]);
    $this->calif_True($answer[413]);
    $this->calif_True($answer[425]);
    $this->calif_false($answer[441]);
    $this->calif_false($answer[447]);
    $this->calif_false($answer[458]);
    $this->calif_false($answer[464]);
    $this->calif_false($answer[469]);
    $this->calif_false($answer[471]);
    return $this->c;
 }

 function scale_A_MAC($answer = array()){
    $this->calif_True($answer[7]);
    $this->calif_True($answer[24]);
    $this->calif_True($answer[36]);
    $this->calif_True($answer[49]);
    $this->calif_True($answer[52]);
    $this->calif_True($answer[69]);
    $this->calif_True($answer[72]);
    $this->calif_False($answer[73]);
    $this->calif_True($answer[82]);
    $this->calif_True($answer[84]);
    $this->calif_True($answer[103]);
    $this->calif_True($answer[105]);
    $this->calif_False($answer[107]);
    $this->calif_True($answer[113]);
    $this->calif_True($answer[115]);
    $this->calif_False($answer[117]);
    $this->calif_True($answer[128]);
    $this->calif_False($answer[137]);
    $this->calif_False($answer[160]);
    $this->calif_False($answer[166]);
    $this->calif_True($answer[172]);
    $this->calif_True($answer[202]);
    $this->calif_True($answer[214]);
    $this->calif_True($answer[224]);
    $this->calif_True($answer[229]);
    $this->calif_True($answer[238]);
    $this->calif_False($answer[251]);
    $this->calif_True($answer[257]);
    $this->calif_True($answer[266]);
    $this->calif_True($answer[180]);
    $this->calif_False($answer[287]);
    $this->calif_False($answer[299]);
    $this->calif_False($answer[325]);
    $this->calif_True($answer[342]);
    $this->calif_True($answer[344]);
    $this->calif_True($answer[387]);
    $this->calif_True($answer[408]);
    $this->calif_True($answer[412]);
    $this->calif_True($answer[414]);
    $this->calif_True($answer[422]);
    $this->calif_True($answer[434]);
    $this->calif_True($answer[439]);
    $this->calif_True($answer[445]);
    $this->calif_True($answer[472]);
    $this->calif_True($answer[502]);
    $this->calif_True($answer[506]);
    $this->calif_True($answer[549]);
    return $this->c;
 }

 function scale_HR($answer = array()){
    $this->calif_False($answer[1]);
    $this->calif_False($answer[15]);
    $this->calif_False($answer[29]);
    $this->calif_True($answer[67]);
    $this->calif_False($answer[69]);
    $this->calif_False($answer[77]);
    $this->calif_True($answer[79]);
    $this->calif_False($answer[89]);
    $this->calif_False($answer[98]);
    $this->calif_False($answer[116]);
    $this->calif_False($answer[129]);
    $this->calif_False($answer[153]);
    $this->calif_False($answer[169]);
    $this->calif_False($answer[171]);
    $this->calif_True($answer[207]);
    $this->calif_True($answer[286]);
    $this->calif_False($answer[293]);
    $this->calif_True($answer[305]);
    $this->calif_False($answer[344]);
    $this->calif_False($answer[390]);
    $this->calif_True($answer[398]);
    $this->calif_False($answer[400]);
    $this->calif_False($answer[420]);
    $this->calif_False($answer[433]);
    $this->calif_False($answer[440]);
    $this->calif_False($answer[460]);
    $this->calif_True($answer[471]);   
    return $this->c;
 }

 function scale_Do($answer = array()){
    $this->calif_False($answer[31]);
    $this->calif_False($answer[52]);
    $this->calif_True($answer[55]);
    $this->calif_False($answer[70]);
    $this->calif_False($answer[73]);
    $this->calif_False($answer[82]);
    $this->calif_False($answer[172]);
    $this->calif_False($answer[201]);
    $this->calif_False($answer[202]);
    $this->calif_True($answer[207]);
    $this->calif_False($answer[227]);
    $this->calif_True($answer[232]);
    $this->calif_False($answer[243]);
    $this->calif_True($answer[244]);
    $this->calif_False($answer[275]);
    $this->calif_False($answer[309]);
    $this->calif_True($answer[384]);
    $this->calif_False($answer[399]);
    $this->calif_False($answer[412]);
    $this->calif_True($answer[416]);
    $this->calif_False($answer[470]);
    $this->calif_False($answer[473]);
    return $this->c;
 }

 function scale_Rs($answer = array()){
    $this->calif_False($answer[7]);
    $this->calif_False($answer[27]);
    $this->calif_False($answer[29]);
    $this->calif_False($answer[32]);
    $this->calif_False($answer[84]);
    $this->calif_True($answer[100]);
    $this->calif_False($answer[103]);
    $this->calif_False($answer[105]);
    $this->calif_False($answer[145]);
    $this->calif_True($answer[160]);
    $this->calif_False($answer[164]);
    $this->calif_False($answer[169]);
    $this->calif_True($answer[199]);
    $this->calif_False($answer[201]);
    $this->calif_False($answer[235]);
    $this->calif_True($answer[266]);
    $this->calif_False($answer[275]);
    $this->calif_False($answer[358]);
    $this->calif_False($answer[412]);
    $this->calif_False($answer[418]);
    $this->calif_False($answer[430]);
    $this->calif_False($answer[431]);
    $this->calif_False($answer[432]);
    $this->calif_True($answer[440]);
    $this->calif_False($answer[456]);
    $this->calif_True($answer[467]);
    $this->calif_False($answer[468]);
    $this->calif_False($answer[470]);
    return $this->c;
 }

 function scale_Dpr($answer = array()){
    $this->calif_False($answer[2]);
    $this->calif_False($answer[3]);
    $this->calif_False($answer[9]);
    $this->calif_False($answer[10]);
    $this->calif_True($answer[15]);
    $this->calif_True($answer[16]);
    $this->calif_False($answer[20]);
    $this->calif_True($answer[28]);
    $this->calif_True($answer[31]);
    $this->calif_True($answer[38]);
    $this->calif_False($answer[43]);
    $this->calif_True($answer[71]);
    $this->calif_True($answer[73]);
    $this->calif_True($answer[81]);
    $this->calif_True($answer[82]);
    $this->calif_False($answer[95]);
    $this->calif_True($answer[110]);
    $this->calif_True($answer[130]);
    $this->calif_False($answer[131]);
    $this->calif_False($answer[140]);
    $this->calif_False($answer[148]);
    $this->calif_False($answer[152]);
    $this->calif_True($answer[215]);
    $this->calif_True($answer[218]);
    $this->calif_False($answer[223]);
    $this->calif_True($answer[233]);
    $this->calif_True($answer[269]);
    $this->calif_True($answer[273]);
    $this->calif_True($answer[299]);
    $this->calif_True($answer[302]);
    $this->calif_True($answer[325]);
    $this->calif_True($answer[331]);
    $this->calif_True($answer[339]);
    $this->calif_True($answer[357]);
    $this->calif_False($answer[405]);
    $this->calif_True($answer[408]);
    $this->calif_True($answer[411]);
    $this->calif_True($answer[449]);
    $this->calif_True($answer[464]);
    $this->calif_True($answer[469]);
    $this->calif_True($answer[472]);
    return $this->c;
 }

 function scale_GM($answer = array()){
    $this->calif_False($answer[4]);
    $this->calif_True($answer[8]);
    $this->calif_True($answer[20]);
    $this->calif_False($answer[23]);
    $this->calif_False($answer[44]);
    $this->calif_False($answer[64]);
    $this->calif_False($answer[70]);
    $this->calif_False($answer[73]);
    $this->calif_False($answer[74]);
    $this->calif_False($answer[80]);
    $this->calif_False($answer[100]);
    $this->calif_False($answer[137]);
    $this->calif_True($answer[143]);
    $this->calif_False($answer[146]);
    $this->calif_True($answer[152]);
    $this->calif_True($answer[159]);
    $this->calif_True($answer[163]);
    $this->calif_True($answer[176]);
    $this->calif_False($answer[187]);
    $this->calif_True($answer[199]);
    $this->calif_True($answer[214]);
    $this->calif_True($answer[237]);
    $this->calif_False($answer[289]);
    $this->calif_True($answer[321]);
    $this->calif_False($answer[331]);
    $this->calif_True($answer[350]);
    $this->calif_False($answer[364]);
    $this->calif_True($answer[385]);
    $this->calif_True($answer[388]);
    $this->calif_False($answer[392]);
    $this->calif_False($answer[395]);
    $this->calif_True($answer[401]);
    $this->calif_False($answer[435]);
    $this->calif_False($answer[438]);
    $this->calif_True($answer[440]);
    $this->calif_False($answer[441]);
    $this->calif_True($answer[462]);
    $this->calif_True($answer[467]);
    $this->calif_False($answer[469]);
    $this->calif_False($answer[471]);
    $this->calif_True($answer[474]);
    $this->calif_False($answer[497]);
    $this->calif_False($answer[509]);
    $this->calif_False($answer[519]);
    $this->calif_False($answer[532]);
    $this->calif_False($answer[536]);
    return $this->c;
 }

 function scale_GF($answer = array()){
    $this->calif_False($answer[1]);
    $this->calif_False($answer[27]);
    $this->calif_True($answer[62]);
    $this->calif_False($answer[63]);
    $this->calif_True($answer[67]);
    $this->calif_False($answer[68]);
    $this->calif_False($answer[79]);
    $this->calif_False($answer[84]);
    $this->calif_False($answer[105]);
    $this->calif_True($answer[119]);
    $this->calif_True($answer[121]);
    $this->calif_False($answer[123]);
    $this->calif_True($answer[128]);
    $this->calif_False($answer[133]);
    $this->calif_False($answer[155]);
    $this->calif_False($answer[197]);
    $this->calif_False($answer[201]);
    $this->calif_True($answer[203]);
    $this->calif_False($answer[220]);
    $this->calif_False($answer[231]);
    $this->calif_False($answer[238]);
    $this->calif_False($answer[239]);
    $this->calif_False($answer[250]);
    $this->calif_False($answer[257]);
    $this->calif_True($answer[263]);
    $this->calif_False($answer[264]);
    $this->calif_True($answer[266]);
    $this->calif_False($answer[272]);
    $this->calif_False($answer[287]);
    $this->calif_True($answer[353]);
    $this->calif_True($answer[384]);
    $this->calif_False($answer[406]);
    $this->calif_False($answer[417]);
    $this->calif_True($answer[426]);
    $this->calif_True($answer[449]);
    $this->calif_True($answer[456]);
    $this->calif_False($answer[465]);
    $this->calif_True($answer[473]);
    $this->calif_False($answer[477]);
    $this->calif_False($answer[487]);
    $this->calif_False($answer[510]);
    $this->calif_False($answer[511]);
    $this->calif_False($answer[537]);
    $this->calif_False($answer[548]);
    $this->calif_False($answer[550]);
    $this->calif_True($answer[552]);
    return $this->c;
 }

 function scale_($answer = array()){
    $this->calif_True($answer[]);
    
    
    return $this->c2;
 }

 function scale_($answer = array()){
    $this->calif_True($answer[]);
    
    
    return $this->c2;
 }

 function scale_($answer = array()){
    $this->calif_True($answer[]);
    
    
    return $this->c2;
 }



}
//Perfil de escalas suplementarias MMPI-2
/*
function scale_A(){
   $answer[30]t
   $answer[37]t
   $answer[55]t
   $answer[64]t
   $answer[81]t
   $answer[126]t
   $answer[134]t
   $answer[214]t
   $answer[232]t
   $answer[242]t
   $answer[250]t
   $answer[272]t
   $answer[276]t
   $answer[288]t
   $answer[300]t
   $answer[308]t
   $answer[309]t
   $answer[310]t
   $answer[324]t
   $answer[327]t
   $answer[337]t
   $answer[338]t
   $answer[340]t
   $answer[346]t
   $answer[387]f
   $answer[389]t
   $answer[390]t
   $answer[393]t
   $answer[399]t
   $answer[407]t
   $answer[410]t
   $answer[414]t
   $answer[420]t
   $answer[427]t
   $answer[441]t
   $answer[447]t
   $answer[450]t
   $answer[463]t
   $answer[468]t
}

function scale_R(){
   $answer[0]f
   $answer[6]f
   $answer[9]f
   $answer[13]f
   $answer[36]f
   $answer[44]f
   $answer[68]f
   $answer[111]f
   $answer[117]f
   $answer[119]f
   $answer[128]f
   $answer[133]f
   $answer[141]f
   $answer[167]f
   $answer[177]f
   $answer[188]f
   $answer[196]f
   $answer[198]f
   $answer[247]f
   $answer[254]f
   $answer[255]f
   $answer[296]f
   $answer[329]f
   $answer[345]f
   $answer[349]f
   $answer[352]f
   $answer[353]f
   $answer[358]f
   $answer[362]f
   $answer[364]f
   $answer[421]f
   $answer[422]f
   $answer[429]f
   $answer[431]f
   $answer[448]f
   $answer[455]f
   $answer[464]f
}

function scale_Fyo(){
   $answer[1]t
   $answer[20]f
   $answer[30]f
   $answer[31]f
   $answer[32]t
   $answer[35]f
   $answer[38]f
   $answer[44]t
   $answer[52]f
   $answer[59]f
   $answer[69]f
   $answer[81]f
   $answer[86]f
   $answer[97]t
   $answer[118]f
   $answer[127]f
   $answer[140]t
   $answer[158]t
   $answer[168]t
   $answer[174]f
   $answer[176]t
   $answer[178]t
   $answer[188]t
   $answer[195]f
   $answer[198]t
   $answer[208]t
   $answer[212]t
   $answer[220]f
   $answer[224]f
   $answer[228]f
   $answer[229]t
   $answer[235]f
   $answer[244]t
   $answer[245]f
   $answer[306]f
   $answer[309]f
   $answer[315]f
   $answer[322]t
   $answer[327]f
   $answer[384]t
   $answer[390]f
   $answer[393]f
   $answer[405]t
   $answer[412]t
   $answer[424]t
   $answer[440]f
   $answer[446]f
   $answer[457]f
   $answer[463]f
   $answer[468]f
   $answer[470]f
}

function scale_A_MAC(){
   $answer[6]t
   $answer[23]t
   $answer[35]t
   $answer[48]t
   $answer[51]t
   $answer[68]t
   $answer[71]t
   $answer[72]f
   $answer[81]t
   $answer[83]t
   $answer[102]t
   $answer[104]t
   $answer[106]f
   $answer[112]t
   $answer[114]t
   $answer[116]f
   $answer[127]t
   $answer[136]f
   $answer[159]f
   $answer[165]f
   $answer[167]t
   $answer[171]t
   $answer[201]t
   $answer[213]t
   $answer[223]t
   $answer[228]t
   $answer[237]t
   $answer[250]f
   $answer[256]t
   $answer[265]t
   $answer[179]t
   $answer[286]f
   $answer[298]f
   $answer[324]f
   $answer[341]t
   $answer[343]t
   $answer[386]t
   $answer[406]t
   $answer[411]t
   $answer[413]t
   $answer[421]t
   $answer[433]t
   $answer[438]t
   $answer[444]t
   $answer[455]t
   $answer[472]t
   $answer[501]t
   $answer[505]t
   $answer[548]t
}

function sacle_HR(){
   $answer[0]f
   $answer[14]f
   $answer[28]f
   $answer[66]t
   $answer[68]f
   $answer[76]f
   $answer[78]t
   $answer[88]f
   $answer[97]f
   $answer[115]f
   $answer[116]f
   $answer[128]f
   $answer[152]f
   $answer[168]f
   $answer[170]f
   $answer[206]t
   $answer[285]t
   $answer[292]f
   $answer[304]t
   $answer[343]f
   $answer[389]f
   $answer[397]t
   $answer[399]f
   $answer[419]f
   $answer[432]f
   $answer[439]f
   $answer[459]f
   $answer[470]t
}

function scale_Do(){
   $answer[30]f
   $answer[51]f
   $answer[54]t
   $answer[69]f
   $answer[72]f
   $answer[81]f
   $answer[171]f
   $answer[200]f
   $answer[201]f
   $answer[206]t
   $answer[226]f
   $answer[231]t
   $answer[242]f
   $answer[243]f
   $answer[244]t
   $answer[274]f
   $answer[308]f
   $answer[385]t
   $answer[398]f
   $answer[411]f
   $answer[415]t
   $answer[469]f
   $answer[472]f
}

function scale_Rs(){
   $answer[6]f
   $answer[26]f
   $answer[28]f
   $answer[31]f
   $answer[83]f
   $answer[99]t
   $answer[102]f
   $answer[104]f
   $answer[144]f
   $answer[159]t
   $answer[163]f
   $answer[168]f
   $answer[198]t
   $answer[200]f
   $answer[201]f
   $answer[234]f
   $answer[265]t
   $answer[274]f
   $answer[357]f
   $answer[411]f
   $answer[416]f
   $answer[417]f
   $answer[429]f
   $answer[430]f
   $answer[431]f
   $answer[439]t
   $answer[455]f
   $answer[466]t
   $answer[467]f
   $answer[469]f
}

function scale_Dpr(){
   $answer[1]f
   $answer[2]f
   $answer[8]f
   $answer[9]f
   $answer[14]t
   $answer[15]t
   $answer[19]f
   $answer[27]t
   $answer[30]t
   $answer[37]t
   $answer[42]f
   $answer[70]t
   $answer[72]t
   $answer[80]t
   $answer[81]t
   $answer[94]f
   $answer[109]t
   $answer[129]t
   $answer[130]f
   $answer[139]f
   $answer[147]f
   $answer[151]f
   $answer[214]t
   $answer[217]t
   $answer[222]f
   $answer[232]t
   $answer[268]t
   $answer[272]t
   $answer[298]t
   $answer[301]t
   $answer[324]t
   $answer[330]t
   $answer[338]t
   $answer[356]t
   $answer[404]f
   $answer[407]t
   $answer[410]t
   $answer[448]t
   $answer[463]t
   $answer[468]t
   $answer[471]t
}

function scale_GM(){
   $answer[3]f
   $answer[7]t
   $answer[19]t
   $answer[22]f 
   $answer[43]f
   $answer[63]f
   $answer[69]f
   $answer[72]f
   $answer[73]f
   $answer[79]f
   $answer[99]f
   $answer[136]f
   $answer[142]t
   $answer[145]f
   $answer[151]t
   $answer[158]t
   $answer[162]t
   $answer[175]t
   $answer[186]f
   $answer[198]t
   $answer[213]t
   $answer[236]t
   $answer[288]f
   $answer[320]t
   $answer[330]f
   $answer[349]t
   $answer[350]f
   $answer[363]f
   $answer[384]t
   $answer[387]t
   $answer[391]f
   $answer[394]f
   $answer[400]t
   $answer[434]f
   $answer[437]f
   $answer[439]t
   $answer[440]f
   $answer[461]t
   $answer[466]t
   $answer[468]f
   $answer[470]f
   $answer[473]t
   $answer[497]f
   $answer[508]f
   $answer[518]f
   $answer[531]f
   $answer[535]f
}

function scale_GF(){
   $answer[0]f
   $answer[26]f
   $answer[61]t
   $answer[62]f
   $answer[66]t
   $answer[67]f
   $answer[78]f
   $answer[83]f
   $answer[104]f
   $answer[118]t
   $answer[120]t
   $answer[122]f
   $answer[127]t
   $answer[132]f
   $answer[154]f
   $answer[196]f
   $answer[200]f
   $answer[202]t
   $answer[219]f
   $answer[230]f
   $answer[237]f
   $answer[238]f
   $answer[249]f
   $answer[256]f
   $answer[262]t
   $answer[263]f
   $answer[265]t
   $answer[271]f
   $answer[286]f
   $answer[352]t
   $answer[383]t
   $answer[405]f
   $answer[416]f
   $answer[425]t
   $answer[448]t
   $answer[455]t
   $answer[464]f
   $answer[472]t
   $answer[476]f
   $answer[486]f
   $answer[509]f
   $answer[510]f
   $answer[536]f
   $answer[547]f
   $answer[549]f
   $answer[551]t
}

function scale_EPK(){
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
   $answer[]
}
*/
?>