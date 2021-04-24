<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SAW</title>

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="index.js"></script>

</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><i class="fas fa-university fa-2x" style="color: #339af0;"></i><a style="color: #339af0;"> SAW</a></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><h4>University Registration</h4></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="registration">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Register Here!!</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <form action="reg_back.php" method="post">
                  <div class="form-group">
                    <label for="enter_name">Enter name</label>
                    <input type="text" name="sname" class="form-control" id="input_name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="enter_no">Enter Phone number</label>
                    <input type="number" name="pnumber" class="form-control" name="enter_no" value="">
                  </div>
                  <div class="form-group">
                    <label for="select_course">Select course</label><br>
                    <select class="form-control" name="select_course">

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="enter_dob">Enter Your Date Of Birth</label>
                    <input type="date" name="enter_dob" class="form-control" id="input_dob" placeholder="D.O.B">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button onclick="return redirect();" name="login" class="btn btn-primary">Log in</button>
                </form>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

  </div>


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
