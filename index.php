<?php include "php/fizz-buzz-process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <link href="https://bootswatch.com/3/flatly/bootstrap.css" rel="stylesheet">
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
    <!-- FORM ========================================== -->
    <div class="row">
      <div class="col-lg-8">
        <div class="well bs-component">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-horizontal" method="GET">
            <fieldset>
              <?php echo isset($msg) ? $msg : ""; ?>
              <legend>FizzBuzz</legend>
              <div class="form-group">
                <label class="col-lg-2 control-label" for="print-from">From</label>
                <div class="col-lg-4">
                  <input class="form-control" name="print-from" placeholder="Print From" type="number" pattern="\d+" min="-9999" max="9999" autofocus required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label" for="print-to">To</label>
                <div class="col-lg-4">
                  <input class="form-control" name="print-to" placeholder="Print To" type="number" pattern="\d+" min="-9999" max="9999" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-8 col-lg-offset-2">
                  <button class="btn btn-default" type="reset">Clear</button> <button class=
                  "btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <!-- ROW COUNT OUTPUT ========================================== -->
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Number of Rows</h3>
            </div>
        </div>
      </div>
    </div>
  </div>
    <!-- TABLE ========================================== -->
    <div class="row">
      <div class="col-lg-12">
        <div class="bs-component">
          <table class="table table-striped table-hover">
            <thead class="page-header">
            <h3>Printing from <?php echo $printFrom; ?> to <?php echo $printTo; ?></h3>
              <tr>
                <th>Number</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Display default message when no range is entered
                if(($printFrom === null) || ($printTo === null)) {
                  echo "<p class='text-muted'>Data will be displayed below.</p>";
                } else {
                  // Asssign i to the sanitized range entered by user
                  for($i = $printFrom; $i <= $printTo; $i++) {
                    // Opening tag for each table row
                    echo "<tr>";
                    // Determine if column needs to be highlighted
                    if($i % 10 == 0) {
                      echo "<td class='success'>";
                    } else {
                      echo "<td>";
                    }
                    // Determine the output for each row
                    if(($i % 3 == 0) & ($i % 5 == 0)){
                      echo "FizzBuzz";
                    } elseif($i % 5 == 0) {
                      echo "Buzz";
                    } elseif($i % 3 == 0) {
                      echo "Fizz";
                    } else {
                      echo "$i";
                    }
                    // Closing tag for each table row
                    echo "</td></tr>";
                  } // Closing for loop tag
              } // Closing else tag
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
