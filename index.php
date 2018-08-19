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
    <div class="row">
      <div class="col-lg-12">
        <div class="well bs-component">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-horizontal" method="GET">
            <fieldset>
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
            <h3 id="tables">Printing from FROM to TO</h3>
          </div>
          <div class="bs-component">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                </tr>
                <tr>
                  <td>2</td>
                </tr>
                <tr class="info">
                  <td>3</td>
                </tr>
                <tr class="success">
                  <td>4</td>
                </tr>
                <tr class="danger">
                  <td>5</td>
                </tr>
                <tr class="warning">
                  <td>6</td>
                </tr>
                <tr class="active">
                  <td>7</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container -->
</body>
</html>