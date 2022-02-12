<?php

function fn_impCompra($mode,$cant){
    switch($mode){
        case 0://Seleccionar
               $icom=0;
               break;
        case 1://Miraflores
               $icom=$cant*710.5;
               break;
        case 2://San Martin de Porres
               $icom=$cant*450.5;
               break;
        case 3://Surco
               $icom=$cant*620.7;
               break;
        default://Barranco
               $icom=$cant*505.3;                     
    }
    return $icom;
}

function fn_impDescuento($cant,$icom){
     if($cant<2){
     	$desc=0.10*$icom;
     }else if($cant>=5 && $cant<10){
     	$desc=0.05*$icom;
     }else if($cant>=10 && $cant<20){
     	$desc=0.07*$icom;
     }else{
     	$desc=0.09*$icom;
     }  
     return $desc;
}

function fn_impPagar($icom,$idesc){
      $ipag= $icom - $idesc;
      return $ipag;
}

function fn_regalo($cant){
     if($cant>=200){
       	$obse=7;
     }else if($cant>=150 && $cant<200){
        $obse=5;
     }else if($cant>=100 && $cant<150){
        $obse=3;
     }else{
        $obse=10;
     }
     return $obse;
}

function fn_NomDistrito($mode){
      if($mode==0){
          $modelo="Seleccionar";
      }else if($mode==1){
          $modelo="Miraflores";
      }else if($mode==2){
          $modelo="San Martin de Porres";
      }else if($mode==3){
          $modelo="Surco";
      }else{
          $modelo="Barranco";
      }  
      return $modelo;
}


?>