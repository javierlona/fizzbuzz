<?php
// Make sure the method we get back from the server is set to GET
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  /* Make sure the variable exists, if it does not set it to null
  *  If the variable exists, strip html & php tags from the value
  *  Assign variable to "raw" variable b/c it has to validated further
  */
  $rawFrom = isset($_GET['print-from']) ? strip_tags($_GET['print-from']) : null;
  $rawTo = isset($_GET['print-to']) ? strip_tags($_GET['print-to']) : null;

  // The min and max range values
  $min = -9999;
  $max = 9999;

  // Forms error variable. Do not create table unless our data is error free
  $formErrors = false;
  
  // Initialize message that displays the valid range
  $msg = "";
  
  /* Validate value is a number
   * submitted values are strings, so use is_numeric instead of is_int
   * options: max, min
   * has_number($items_to_order, ['min' => 1, 'max' => 5])
   */
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

  // Check that our value is numeric and within designated range
  if(!(has_number($rawFrom, ['min' => $min, 'max' => $max]))) {
    $formErrors = true;
  }

  // Check that our value is numeric and within designated range
  if(!(has_number($rawTo, ['min' => $min, 'max' => $max]))) {
    $formErrors = true;
  }

  // Check that our begining value is smaller than our ending value
  if($rawFrom > $rawTo) {
    $formErrors = true;
  }

  if(!($formErrors)) {
    // The value range is valid, reassign values to verified variables
    $printFrom = $rawFrom;
    $printTo = $rawTo;
  } else {
    // The value range is invalid, reassign variables to null
    $msg = "<p class='text-muted'>Please enter a valid range from $min to $max</p>";
    $printFrom = null;
    $printTo = null;
  }

}

?>