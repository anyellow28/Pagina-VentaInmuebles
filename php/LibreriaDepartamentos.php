<?php

function fn_impCompra($mode,$cant){
    switch($mode){
        case 0://Seleccionar
               $icom=0;
               break;
        case 1://Basico
               $icom=$cant*15000;
               break;
        case 2://Duplex
               $icom=$cant*20000;
               break;
        case 3://Estudio
               $icom=$cant*25000;
               break;
        default://Penthouse
               $icom=$cant*300000;                     
    }
    return $icom;
}

function fn_impDescuento($cant,$icom){
     if($cant<2){
     	$desc=0;
     }else if($cant>=2 && $cant<4){
     	$desc=0.8*$icom;
     }else if($cant>=4 && $cant<7){
     	$desc=0.10*$icom;
     }else{
     	$desc=0.15*$icom;
     }  
     return $desc;
}

function fn_impPagar($icom,$idesc){
      $ipag= $icom - $idesc;
      return $ipag;
}

function fn_obsequio($cant){
     if($cant>=30){
       	$obse=4*$cant;
     }else if($cant>=20 && $cant<30){
        $obse=3*$cant;
     }else if($cant>=10 && $cant<20){
        $obse=2*$cant;
     }else{
        $obse=2;
     }
     return $obse;
}

function fn_NomModelo($mode){
      if($mode==0){
          $modelo="Seleccionar";
      }else if($mode==1){
          $modelo="Basico";
      }else if($mode==2){
          $modelo="Duplex";
      }else if($mode==3){
          $modelo="Estudio";
      }else{
          $modelo="Penthouse";
      }  
      return $modelo; 
}


?>