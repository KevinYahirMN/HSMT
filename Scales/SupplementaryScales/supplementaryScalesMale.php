<?php
//Perfil de escalas suplementarias MMPI-2

class supplementaryScalesMale{

   private $c;

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
      $this-> c = 0;
      $this->calif_True($answer[30]);
      $this->calif_True($answer[37]);
      $this->calif_True($answer[55]);
      $this->calif_True($answer[64]);
      $this->calif_True($answer[81]);
      $this->calif_True($answer[126]);
      $this->calif_True($answer[134]);
      $this->calif_True($answer[214]);
      $this->calif_True($answer[232]);
      $this->calif_True($answer[242]);
      $this->calif_True($answer[250]);
      $this->calif_True($answer[272]);
      $this->calif_True($answer[276]);
      $this->calif_True($answer[288]);
      $this->calif_True($answer[300]);
      $this->calif_True($answer[308]);
      $this->calif_True($answer[309]);
      $this->calif_True($answer[310]);
      $this->calif_True($answer[324]);
      $this->calif_True($answer[327]);
      $this->calif_True($answer[337]);
      $this->calif_True($answer[338]);
      $this->calif_True($answer[340]);
      $this->calif_True($answer[346]);
      $this->calif_False($answer[387]);
      $this->calif_True($answer[389]);
      $this->calif_True($answer[390]);
      $this->calif_True($answer[393]);
      $this->calif_True($answer[399]);
      $this->calif_True($answer[407]);
      $this->calif_True($answer[410]);
      $this->calif_True($answer[414]);
      $this->calif_True($answer[420]);
      $this->calif_True($answer[427]);
      $this->calif_True($answer[441]);
      $this->calif_True($answer[447]);
      $this->calif_True($answer[450]);
      $this->calif_True($answer[463]);
      $this->calif_True($answer[468]);
      return $this->c;
   }

   function scale_R($answer = array()){
      $this-> c = 0;
      $this->calif_False($answer[0]);
      $this->calif_False($answer[6]);
      $this->calif_False($answer[9]);
      $this->calif_False($answer[13]);
      $this->calif_False($answer[36]);
      $this->calif_False($answer[44]);
      $this->calif_False($answer[68]);
      $this->calif_False($answer[111]);
      $this->calif_False($answer[117]);
      $this->calif_False($answer[119]);
      $this->calif_False($answer[127]);
      $this->calif_False($answer[133]);
      $this->calif_False($answer[141]);
      $this->calif_False($answer[167]);
      $this->calif_False($answer[177]);
      $this->calif_False($answer[188]);
      $this->calif_False($answer[196]);
      $this->calif_False($answer[198]);
      $this->calif_False($answer[247]);
      $this->calif_False($answer[254]);
      $this->calif_False($answer[255]);
      $this->calif_False($answer[296]);
      $this->calif_False($answer[329]);
      $this->calif_False($answer[345]);
      $this->calif_False($answer[349]);
      $this->calif_False($answer[352]);
      $this->calif_False($answer[353]);
      $this->calif_False($answer[358]);
      $this->calif_False($answer[362]);
      $this->calif_False($answer[364]);
      $this->calif_False($answer[421]);
      $this->calif_False($answer[422]);
      $this->calif_False($answer[429]);
      $this->calif_False($answer[431]);
      $this->calif_False($answer[448]);
      $this->calif_False($answer[455]);
      $this->calif_False($answer[464]);
      return $this->c;
 }

   function scale_Fyo($answer = array()){
      $this-> c = 0;
      $this->calif_True($answer[1]);
      $this->calif_False($answer[22]);
      $this->calif_False($answer[30]);
      $this->calif_False($answer[31]);
      $this->calif_True($answer[32]);
      $this->calif_False($answer[35]);
      $this->calif_False($answer[38]);
      $this->calif_True($answer[44]);
      $this->calif_False($answer[52]);
      $this->calif_False($answer[59]);
      $this->calif_False($answer[69]);
      $this->calif_False($answer[81]);
      $this->calif_False($answer[86]);
      $this->calif_True($answer[97]);
      $this->calif_False($answer[118]);
      $this->calif_False($answer[127]);
      $this->calif_True($answer[140]);
      $this->calif_True($answer[158]);
      $this->calif_True($answer[168]);
      $this->calif_False($answer[174]);
      $this->calif_True($answer[176]);
      $this->calif_True($answer[178]);
      $this->calif_True($answer[188]);
      $this->calif_False($answer[195]);
      $this->calif_True($answer[198]);
      $this->calif_True($answer[208]);
      $this->calif_True($answer[212]);
      $this->calif_False($answer[214]);
      $this->calif_False($answer[220]);
      $this->calif_False($answer[224]);
      $this->calif_False($answer[228]);
      $this->calif_True($answer[229]);
      $this->calif_False($answer[235]);
      $this->calif_True($answer[244]);
      $this->calif_False($answer[245]);
      $this->calif_False($answer[306]);
      $this->calif_False($answer[309]);
      $this->calif_False($answer[315]);
      $this->calif_True($answer[322]);
      $this->calif_False($answer[327]);
      $this->calif_True($answer[384]);
      $this->calif_False($answer[390]);
      $this->calif_False($answer[393]);
      $this->calif_True($answer[405]);
      $this->calif_True($answer[412]);
      $this->calif_True($answer[424]);
      $this->calif_false($answer[440]);
      $this->calif_false($answer[446]);
      $this->calif_false($answer[457]);
      $this->calif_false($answer[463]);
      $this->calif_false($answer[468]);
      $this->calif_false($answer[470]);
      return $this->c;
 }

 function scale_A_MAC($answer = array()){
   $this-> c = 0;
    $this->calif_True($answer[6]);
    $this->calif_True($answer[23]);
    $this->calif_True($answer[35]);
    $this->calif_True($answer[48]);
    $this->calif_True($answer[51]);
    $this->calif_True($answer[68]);
    $this->calif_True($answer[71]);
    $this->calif_False($answer[72]);
    $this->calif_True($answer[81]);
    $this->calif_True($answer[83]);
    $this->calif_True($answer[102]);
    $this->calif_True($answer[104]);
    $this->calif_False($answer[106]);
    $this->calif_True($answer[112]);
    $this->calif_True($answer[114]);
    $this->calif_False($answer[116]);
    $this->calif_True($answer[127]);
    $this->calif_False($answer[136]);
    $this->calif_False($answer[159]);
    $this->calif_False($answer[165]);
    $this->calif_False($answer[167]);
    $this->calif_True($answer[171]);
    $this->calif_True($answer[201]);
    $this->calif_True($answer[213]);
    $this->calif_True($answer[223]);
    $this->calif_True($answer[228]);
    $this->calif_True($answer[237]);
    $this->calif_False($answer[250]);
    $this->calif_True($answer[256]);
    $this->calif_True($answer[265]);
    $this->calif_True($answer[179]);
    $this->calif_False($answer[286]);
    $this->calif_False($answer[298]);
    $this->calif_False($answer[324]);
    $this->calif_True($answer[341]);
    $this->calif_True($answer[343]);
    $this->calif_True($answer[386]);
    $this->calif_True($answer[407]);
    $this->calif_True($answer[411]);
    $this->calif_True($answer[413]);
    $this->calif_True($answer[421]);
    $this->calif_True($answer[433]);
    $this->calif_True($answer[438]);
    $this->calif_True($answer[444]);
    $this->calif_True($answer[455]);
    $this->calif_True($answer[472]);
    $this->calif_True($answer[501]);
    $this->calif_True($answer[505]);
    $this->calif_True($answer[548]);
    return $this->c;
 }

 
 function scale_HR($answer = array()){
   $this-> c = 0;
    $this->calif_False($answer[0]);
    $this->calif_False($answer[14]);
    $this->calif_False($answer[28]);
    $this->calif_True($answer[66]);
    $this->calif_False($answer[68]);
    $this->calif_False($answer[76]);
    $this->calif_True($answer[78]);
    $this->calif_False($answer[88]);
    $this->calif_False($answer[97]);
    $this->calif_False($answer[115]);
    $this->calif_False($answer[116]);
    $this->calif_False($answer[128]);
    $this->calif_False($answer[152]);
    $this->calif_False($answer[168]);
    $this->calif_False($answer[170]);
    $this->calif_True($answer[206]);
    $this->calif_True($answer[285]);
    $this->calif_False($answer[292]);
    $this->calif_True($answer[304]);
    $this->calif_False($answer[343]);
    $this->calif_False($answer[389]);
    $this->calif_True($answer[397]);
    $this->calif_False($answer[399]);
    $this->calif_False($answer[419]);
    $this->calif_False($answer[432]);
    $this->calif_False($answer[439]);
    $this->calif_False($answer[459]);
    $this->calif_True($answer[470]);
    return $this->c;
 }

 function scale_Do($answer = array()){
   $this-> c = 0;
    $this->calif_False($answer[30]);
    $this->calif_False($answer[51]);
    $this->calif_True($answer[54]);
    $this->calif_False($answer[69]);
    $this->calif_False($answer[72]);
    $this->calif_False($answer[81]);
    $this->calif_False($answer[171]);
    $this->calif_False($answer[200]);
    $this->calif_False($answer[201]);
    $this->calif_True($answer[206]);
    $this->calif_False($answer[219]);
    $this->calif_False($answer[226]);
    $this->calif_True($answer[231]);
    $this->calif_False($answer[242]);
    $this->calif_False($answer[243]);
    $this->calif_True($answer[244]);
    $this->calif_False($answer[274]);
    $this->calif_False($answer[308]);
    $this->calif_False($answer[324]);
    $this->calif_True($answer[385]);
    $this->calif_False($answer[398]);
    $this->calif_False($answer[411]);
    $this->calif_True($answer[415]);
    $this->calif_False($answer[469]);
    $this->calif_False($answer[472]);
    return $this->c;
 }

 function scale_Rs($answer = array()){
   $this-> c = 0;
    $this->calif_False($answer[6]);
    $this->calif_False($answer[26]);
    $this->calif_False($answer[28]);
    $this->calif_False($answer[31]);
    $this->calif_False($answer[83]);
    $this->calif_True($answer[99]);
    $this->calif_False($answer[102]);
    $this->calif_False($answer[104]);
    $this->calif_False($answer[144]);
    $this->calif_True($answer[159]);
    $this->calif_False($answer[163]);
    $this->calif_False($answer[168]);
    $this->calif_True($answer[198]);
    $this->calif_False($answer[200]);
    $this->calif_False($answer[201]);
    $this->calif_False($answer[234]);
    $this->calif_True($answer[265]);
    $this->calif_False($answer[274]);
    $this->calif_False($answer[357]);
    $this->calif_False($answer[411]);
    $this->calif_False($answer[416]);
    $this->calif_False($answer[417]);
    $this->calif_False($answer[429]);
    $this->calif_False($answer[430]);
    $this->calif_False($answer[431]);
    $this->calif_True($answer[439]);
    $this->calif_False($answer[455]);
    $this->calif_True($answer[466]);
    $this->calif_False($answer[467]);
    $this->calif_False($answer[469]);
    return $this->c;
 }

 function scale_Dpr($answer = array()){
   $this-> c = 0;
    $this->calif_False($answer[1]);
    $this->calif_False($answer[2]);
    $this->calif_False($answer[8]);
    $this->calif_False($answer[9]);
    $this->calif_True($answer[14]);
    $this->calif_True($answer[15]);
    $this->calif_False($answer[19]);
    $this->calif_True($answer[27]);
    $this->calif_True($answer[30]);
    $this->calif_True($answer[37]);
    $this->calif_False($answer[42]);
    $this->calif_True($answer[70]);
    $this->calif_True($answer[72]);
    $this->calif_True($answer[80]);
    $this->calif_True($answer[81]);
    $this->calif_False($answer[94]);
    $this->calif_True($answer[109]);
    $this->calif_True($answer[129]);
    $this->calif_False($answer[130]);
    $this->calif_False($answer[139]);
    $this->calif_False($answer[147]);
    $this->calif_False($answer[151]);
    $this->calif_True($answer[214]);
    $this->calif_True($answer[217]);
    $this->calif_False($answer[222]);
    $this->calif_True($answer[232]);
    $this->calif_True($answer[268]);
    $this->calif_True($answer[272]);
    $this->calif_True($answer[298]);
    $this->calif_True($answer[301]);
    $this->calif_True($answer[324]);
    $this->calif_True($answer[330]);
    $this->calif_True($answer[338]);
    $this->calif_True($answer[356]);
    $this->calif_False($answer[404]);
    $this->calif_True($answer[407]);
    $this->calif_True($answer[410]);
    $this->calif_True($answer[448]);
    $this->calif_True($answer[463]);
    $this->calif_True($answer[468]);
    $this->calif_True($answer[471]);
    return $this->c;
 }

 function scale_GM($answer = array()){
   $this-> c = 0;
    $this->calif_False($answer[3]);
    $this->calif_True($answer[7]);
    $this->calif_True($answer[19]);
    $this->calif_False($answer[22]);
    $this->calif_False($answer[43]);
    $this->calif_False($answer[63]);
    $this->calif_False($answer[69]);
    $this->calif_False($answer[72]);
    $this->calif_False($answer[73]);
    $this->calif_False($answer[79]);
    $this->calif_False($answer[99]);
    $this->calif_False($answer[136]);
    $this->calif_True($answer[142]);
    $this->calif_False($answer[145]);
    $this->calif_True($answer[151]);
    $this->calif_True($answer[158]);
    $this->calif_True($answer[162]);
    $this->calif_True($answer[175]);
    $this->calif_False($answer[186]);
    $this->calif_True($answer[198]);
    $this->calif_True($answer[213]);
    $this->calif_True($answer[236]);
    $this->calif_False($answer[288]);
    $this->calif_True($answer[320]);
    $this->calif_False($answer[330]);
    $this->calif_True($answer[349]);
    $this->calif_False($answer[350]);
    $this->calif_False($answer[363]);
    $this->calif_True($answer[384]);
    $this->calif_True($answer[387]);
    $this->calif_False($answer[391]);
    $this->calif_False($answer[394]);
    $this->calif_True($answer[400]);
    $this->calif_False($answer[434]);
    $this->calif_False($answer[437]);
    $this->calif_True($answer[439]);
    $this->calif_False($answer[440]);
    $this->calif_True($answer[461]);
    $this->calif_True($answer[466]);
    $this->calif_False($answer[468]);
    $this->calif_False($answer[470]);
    $this->calif_True($answer[473]);
    $this->calif_False($answer[497]);
    $this->calif_False($answer[508]);
    $this->calif_False($answer[518]);
    $this->calif_False($answer[531]);
    $this->calif_False($answer[535]);
    return $this->c;
 }

 function scale_GF($answer = array()){
    $this-> c = 0;
    $this->calif_False($answer[0]);
    $this->calif_False($answer[26]);
    $this->calif_True($answer[61]);
    $this->calif_False($answer[62]);
    $this->calif_True($answer[66]);
    $this->calif_False($answer[67]);
    $this->calif_False($answer[78]);
    $this->calif_False($answer[83]);
    $this->calif_False($answer[104]);
    $this->calif_True($answer[118]);
    $this->calif_True($answer[120]);
    $this->calif_False($answer[122]);
    $this->calif_True($answer[127]);
    $this->calif_False($answer[132]);
    $this->calif_False($answer[154]);
    $this->calif_False($answer[196]);
    $this->calif_False($answer[200]);
    $this->calif_True($answer[202]);
    $this->calif_False($answer[219]);
    $this->calif_False($answer[230]);
    $this->calif_False($answer[237]);
    $this->calif_False($answer[238]);
    $this->calif_False($answer[249]);
    $this->calif_False($answer[256]);
    $this->calif_True($answer[262]);
    $this->calif_False($answer[263]);
    $this->calif_True($answer[265]);
    $this->calif_False($answer[271]);
    $this->calif_False($answer[286]);
    $this->calif_True($answer[352]);
    $this->calif_True($answer[383]);
    $this->calif_False($answer[405]);
    $this->calif_False($answer[416]);
    $this->calif_True($answer[425]);
    $this->calif_True($answer[448]);
    $this->calif_True($answer[455]);
    $this->calif_False($answer[464]);
    $this->calif_True($answer[472]);
    $this->calif_False($answer[476]);
    $this->calif_False($answer[486]);
    $this->calif_False($answer[509]);
    $this->calif_False($answer[510]);
    $this->calif_False($answer[536]);
    $this->calif_False($answer[547]);
    $this->calif_False($answer[549]);
    $this->calif_True($answer[551]);
    return $this->c;
 }

 function scale_EPK($answer = array()){
   $this-> c = 0;
   $this->calif_False($answer[1]);
   $this->calif_False($answer[2]);
   $this->calif_False($answer[8]);
   $this->calif_True($answer[15]);
   $this->calif_True($answer[16]);
   $this->calif_True($answer[21]);
   $this->calif_True($answer[22]);
   $this->calif_True($answer[29]);
   $this->calif_True($answer[30]);
   $this->calif_True($answer[31]);
   $this->calif_True($answer[36]);
   $this->calif_True($answer[38]);
   $this->calif_True($answer[47]);
   $this->calif_False($answer[48]);
   $this->calif_True($answer[51]);
   $this->calif_True($answer[55]);
   $this->calif_True($answer[58]);
   $this->calif_True($answer[64]);
   $this->calif_False($answer[74]);
   $this->calif_True($answer[81]);
   $this->calif_True($answer[84]);
   $this->calif_True($answer[91]);
   $this->calif_True($answer[93]);
   $this->calif_False($answer[94]);
   $this->calif_True($answer[100]);
   $this->calif_False($answer[124]);
   $this->calif_True($answer[134]);
   $this->calif_False($answer[139]);
   $this->calif_True($answer[149]);
   $this->calif_True($answer[167]);
   $this->calif_True($answer[169]);
   $this->calif_True($answer[195]);
   $this->calif_True($answer[220]);
   $this->calif_True($answer[273]);
   $this->calif_True($answer[276]);
   $this->calif_True($answer[301]);
   $this->calif_True($answer[302]);
   $this->calif_True($answer[304]);
   $this->calif_True($answer[315]);
   $this->calif_True($answer[318]);
   $this->calif_True($answer[326]);
   $this->calif_True($answer[327]);
   $this->calif_True($answer[338]);
   $this->calif_True($answer[346]);
   $this->calif_True($answer[348]);
   $this->calif_True($answer[366]);
   return $this->c;
}

function scale_EPS($answer = array()){
   $this-> c = 0;
   $this->calif_False($answer[2]);
   $this->calif_False($answer[8]);
   $this->calif_True($answer[16]);
   $this->calif_True($answer[19]);
   $this->calif_True($answer[20]);
   $this->calif_True($answer[30]);
   $this->calif_True($answer[31]);
   $this->calif_True($answer[36]);
   $this->calif_True($answer[37]);
   $this->calif_True($answer[43]);
   $this->calif_False($answer[44]);
   $this->calif_True($answer[47]);
   $this->calif_True($answer[55]);
   $this->calif_True($answer[58]);
   $this->calif_True($answer[64]);
   $this->calif_False($answer[74]);
   $this->calif_True($answer[84]);
   $this->calif_True($answer[93]);
   $this->calif_False($answer[94]);
   $this->calif_True($answer[115]);
   $this->calif_True($answer[134]);
   $this->calif_False($answer[140]);
   $this->calif_True($answer[144]);
   $this->calif_True($answer[149]);
   $this->calif_False($answer[164]);
   $this->calif_True($answer[167]);
   $this->calif_True($answer[169]);
   $this->calif_True($answer[179]);
   $this->calif_False($answer[207]);
   $this->calif_True($answer[217]);
   $this->calif_True($answer[220]);
   $this->calif_False($answer[222]);
   $this->calif_True($answer[272]);
   $this->calif_True($answer[273]);
   $this->calif_True($answer[276]);
   $this->calif_False($answer[279]);
   $this->calif_True($answer[298]);
   $this->calif_True($answer[300]);
   $this->calif_True($answer[303]);
   $this->calif_True($answer[304]);
   $this->calif_True($answer[310]);
   $this->calif_True($answer[315]);
   $this->calif_True($answer[318]);
   $this->calif_True($answer[324]);
   $this->calif_True($answer[327]);
   $this->calif_False($answer[371]);
   $this->calif_True($answer[376]);
   $this->calif_True($answer[385]);
   $this->calif_True($answer[399]);
   $this->calif_False($answer[404]);
   $this->calif_True($answer[462]);
   $this->calif_True($answer[463]);
   $this->calif_True($answer[468]);
   $this->calif_True($answer[470]);
   $this->calif_True($answer[474]);
   $this->calif_True($answer[478]);
   $this->calif_True($answer[514]);
   $this->calif_True($answer[515]);
   $this->calif_False($answer[563]);
   $this->calif_True($answer[564]);
   return $this->c;
}
 
function scale_ls1($answer = array()){
   $this-> c = 0;
   $this->calif_False($answer[48]);
   $this->calif_True($answer[157]);
   $this->calif_True($answer[160]);
   $this->calif_True($answer[166]);
   $this->calif_True($answer[184]);
   $this->calif_True($answer[242]);
   $this->calif_False($answer[261]);
   $this->calif_True($answer[264]);
   $this->calif_True($answer[274]);
   $this->calif_False($answer[279]);
   $this->calif_True($answer[288]);
   $this->calif_False($answer[320]);
   $this->calif_False($answer[341]);
   $this->calif_False($answer[359]);
   return $this->c;

}

function scale_ls2($answer = array()){
   $this-> c = 0;
   $this->calif_False($answer[85]);
   $this->calif_True($answer[336]);
   $this->calif_False($answer[339]);
   $this->calif_False($answer[352]);
   $this->calif_False($answer[358]);
   $this->calif_False($answer[362]);
   $this->calif_True($answer[366]);
   $this->calif_False($answer[369]);
   return $this->c;
}

function scale_ls3($answer = array()){
   $this-> c = 0;
   $this->calif_True($answer[30]);
   $this->calif_True($answer[55]);
   $this->calif_True($answer[103]);
   $this->calif_True($answer[109]);
   $this->calif_True($answer[134]);
   $this->calif_True($answer[283]);
   $this->calif_True($answer[301]);
   $this->calif_True($answer[307]);
   $this->calif_True($answer[325]);
   $this->calif_True($answer[327]);
   $this->calif_True($answer[337]);
   $this->calif_True($answer[346]);
   $this->calif_True($answer[347]);
   $this->calif_True($answer[357]);
   $this->calif_True($answer[363]);
   $this->calif_True($answer[367]);
   $this->calif_True($answer[368]);
   return $this->c;
}

function scale_Fp($answer = array()){
   $this-> c = 0;
   $this->calif_True($answer[280]);
   $this->calif_True($answer[290]);
   $this->calif_True($answer[302]);
   $this->calif_True($answer[310]);
   $this->calif_True($answer[316]);
   $this->calif_True($answer[318]);
   $this->calif_True($answer[321]);
   $this->calif_True($answer[322]);
   $this->calif_True($answer[328]);
   $this->calif_True($answer[331]);
   $this->calif_True($answer[332]);
   $this->calif_True($answer[333]);
   $this->calif_False($answer[382]);
   $this->calif_True($answer[386]);
   $this->calif_True($answer[394]);
   $this->calif_False($answer[403]);
   $this->calif_True($answer[406]);
   $this->calif_True($answer[430]);
   $this->calif_True($answer[449]);
   $this->calif_True($answer[453]);
   $this->calif_True($answer[462]);
   $this->calif_True($answer[467]);
   $this->calif_True($answer[475]);
   $this->calif_True($answer[477]);
   $this->calif_True($answer[483]);
   $this->calif_True($answer[488]);
   $this->calif_False($answer[500]);
   $this->calif_True($answer[505]);
   $this->calif_True($answer[515]);
   $this->calif_True($answer[516]);
   $this->calif_True($answer[519]);
   $this->calif_True($answer[523]);
   $this->calif_True($answer[524]);
   $this->calif_True($answer[525]);
   $this->calif_True($answer[527]);
   $this->calif_True($answer[529]);
   $this->calif_True($answer[538]);
   $this->calif_True($answer[539]);
   $this->calif_True($answer[543]);
   $this->calif_True($answer[554]);
   return $this->c;
}

}
?>