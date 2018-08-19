<?php

  $rawFrom = isset($_GET['print-from']) ? strip_tags($_GET['print-from']) : 0;
  $rawTo = isset($_GET['print-to']) ? strip_tags($_GET['print-to']) : 0;

  // $rawFrom = $_GET['print-from'];
  // $rawTo = $_GET['print-to'];

  // echo $rawFrom;
  // echo $rawTo;

  for($i = $rawFrom; $i <= $rawTo; $i++) {
    if(($i % 3 == 0) & ($i % 5 == 0)) {
      echo "FizzBuzz";
      echo "<br>";
    } elseif($i % 3 == 0) {
      echo "Fizz";
      echo "<br>";
    } elseif($i % 5 == 0) {
      echo "Buzz";
      echo "<br>";
    } else {
      echo $i;
      echo "<br>";
    }
  }

?>