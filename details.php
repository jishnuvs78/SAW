<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SAW</title>

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles2.css">

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
              <h4>Student Details</h4>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col-6">
        <div class="details_form">
          <form class="" action="details_back.php" method="post" autocomplete="on">
            <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input type="email" class="form-control" value="<?php session_start(); echo $_SESSION['emailid']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="enter_no">Enter Phone number</label>
              <input type="number" class="form-control" name="enter_no" value="<?php echo $_GET['cid'] ; ?>">
            </div>
            <div class="form-group smallforms">
              <label for="select_gender">Gender</label><br>
              <select class="form-control" name="select_gender">

              </select>
            </div>
            <div class="form-group">
              <label for="enter_address">Enter Address:</label>
              <input type="text" class="form-control" id="enter_address" placeholder="Address line 1" name="address_line1"><br>
              <input type="text" class="form-control" id="enter_address" placeholder="Address line 2" name="address_line2">
            </div>
            <div class="form-group smallforms">
              <label for="enter_pin">Pincode</label>
              <input type="number" class="form-control" name="pin" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
