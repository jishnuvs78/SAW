<?php

if(isset($_POST['login'])){


$connection=mysqli_connect('localhost','root','','application_form');

  $pnumber=$_POST['pnumber'];
  $mail=$_POST['email'];
  $st_id=$_POST['s_id'];

  $query1="SELECT application_status_id FROM tab_application WHERE student_reference_id='$st_id'";
  $result1=mysqli_query($connection,$query1);

  $st=mysqli_fetch_object($result1);
  $id=$st->application_status_id;
  if ($id==1) {
       echo "complete";
  }
  elseif ($id==2 || $id==NULL) {
    session_start();
    $_SESSION['s_id']=$st_id;
    header("Location: http://localhost/demo/SAW/academic.php?");
  }




}

 ?>
