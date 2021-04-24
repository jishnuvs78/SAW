<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SAW</title>

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles3.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><i class="fas fa-university fa-2x" style="color: #339af0;"></i><a style="color: #339af0;"> SAW</a></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <h4>Academic Details</h4>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col-6">
        <div class="details_form">
          <form class="" action="ac_back.php" method="post">
            <div class="form-group">
              <label for="10_qual">
                <h5>10th qualification:</h5>
              </label>
              <input type="text" class="form-control" id="10_qual" placeholder="School name"><br>
              <input type="text" class="form-control" id="10_qual" placeholder="Board name"><br>
              <input type="text" class="form-control" id="10_qual" placeholder="Batch"><br>
              <input type="number" class="form-control" name="10_qual" placeholder="Result/C.G.P.A" value=""><br><br>
              <div class="form-group">
                <label for="12_qual">
                  <h5>12th qualification:</h5>
                </label>
                <input type="text" class="form-control" id="12_qual" placeholder="School name"><br>
                <input type="text" class="form-control" id="12_qual" placeholder="Board name"><br>
                <input type="text" class="form-control" id="12_qual" placeholder="Batch"><br>
                <input type="number" class="form-control" name="12_qual" placeholder="Result" value="">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
