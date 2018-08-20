<?php include "fizz-buzz-process.php"; ?>
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
    <!-- FORM ========================================== -->
    <div class="row">
      <div class="col-lg-8">
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
                <div class="col-lg-8 col-lg-offset-2">
                  <button class="btn btn-default" type="reset">Clear</button> <button class=
                  "btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
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
                // Display default message when no range is entered
                if(($printFrom === null) || ($printTo === null)) {
                  echo "<p class='text-muted'>Data will be displayed below.</p>";
                } else {
                  // Asssign i to the sanitized range entered by user
                  for($i = $printFrom; $i <= $printTo; $i++) {
                    echo "<tr>";
                    if(($i % 3 == 0) & ($i % 5 == 0) & ($i % 10 == 0)) {
                      echo "<td class='success'>FizzBuzz</td>";
                    } elseif(($i % 3 == 0) & ($i % 5 == 0)) {
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
                    // Closing tag for each table row
                    echo "</tr>";
                  } // closing for loop tag
              } // closing else tag
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