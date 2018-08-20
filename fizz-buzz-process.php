<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  $rawFrom = isset($_GET['print-from']) ? strip_tags($_GET['print-from']) : null;
  $rawTo = isset($_GET['print-to']) ? strip_tags($_GET['print-to']) : null;
  $min = -9999;
  $max = 9999;

  $formErrors = false;
  $msg = "";
  
  // * validate value is a number
  // submitted values are strings, so use is_numeric instead of is_int
  // options: max, min
  // has_number($items_to_order, ['min' => 1, 'max' => 5])
  function has_number($value, $options=[]) {
    if(!is_numeric($value)) {
      return false;
    }
    if(isset($options['max']) && ($value > (int)$options['max'])) {
      return false;
    }
    if(isset($options['min']) && ($value < (int)$options['min'])) {
      return false;
    }
    return true;
  }

  if(!($cleanFrom = has_number($rawFrom, ['min' => $min, 'max' => $max]))) {
    $formErrors = true;
  } 
  if(!($cleanTo = has_number($rawTo, ['min' => $min, 'max' => $max]))) {
    $formErrors = true;
  } 


  if(!($formErrors)) {
    // The value range is valid
    $printFrom = $rawFrom;
    $printTo = $rawTo;
  } else {
    // The value range is invalid
    $msg = "Please enter a range from $min to $max";
    $printFrom = null;
    $printTo = null;
  }

}

?>