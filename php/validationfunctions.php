<?php
  function checkIfNumeric($input){
    if(is_numeric($input)){
      return number_format($input,2);
    }else{
      return "0.0";
    }
  }

  function formatAsPrice($input){
    $input = checkIfNumeric($input);
    $input = "Php ".$input;
    return $input;
  }
?>
