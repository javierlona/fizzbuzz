<?php //include "fizz-buzz-process.php"; 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  $rawFrom = isset($_GET['print-from']) ? strip_tags($_GET['print-from']) : 0;
  $rawTo = isset($_GET['print-to']) ? strip_tags($_GET['print-to']) : 0;
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
    $msg = "Invalid Data Range";
    $printFrom = 0;
    $printTo = 0;
  }

}

    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <link href="https://bootswatch.com/3/yeti/bootstrap.css" rel="stylesheet">
  <title>Level5 Assessment</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Hello World!</h1>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="well bs-component">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-horizontal" method="GET">
            <fieldset>
              <?php echo isset($msg) ? $msg : ''; ?>
              <legend>FizzBuzz</legend>
              <div class="form-group">
                <label class="col-lg-2 control-label" for="print-from">From</label>
                <div class="col-lg-4">
                  <input class="form-control" name="print-from" id="print-from" placeholder="Print From" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label" for="print-to">To</label>
                <div class="col-lg-4">
                  <input class="form-control" name="print-to" id="print-to" placeholder="Print To" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button class="btn btn-default" type="reset">Clear</button> <button class=
                  "btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- Tables
      ================================================== -->
    <div class="bs-docs-section">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h3 id="tables">Printing from <?php echo $printFrom; ?> to <?php echo $printTo; ?></h3>
          </div>
          <div class="bs-component">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Number</th>
                </tr>
              </thead>
              <tbody id="tbody">
                <?php
                  for($i = $printFrom; $i <= $printTo; $i++) {
                    echo "<tr>";
                    if(($i % 3 == 0) & ($i % 5 == 0)) {
                      echo "<td>FizzBuzz</td>";
                    } elseif($i % 3 == 0) {
                      echo "<td>Fizz</td>";
                    } elseif(($i % 5 == 0) & ($i % 10 == 0)) {
                      echo "<td class='success'>Buzz</td>";
                    } elseif($i % 5 == 0) {
                      echo "<td>Buzz</td>";
                    } else {
                      echo "<td>$i</td>";
                    }
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container -->
  <!-- <script src="js/script.js"></script> -->
</body>
</html>