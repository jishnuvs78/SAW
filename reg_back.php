<?php
if(isset($_POST['submit'])){


$connection=mysqli_connect('localhost','root','','application_form');

  $sname=$_POST['sname'];
  $email=$_POST['email'];
  $pnumber=$_POST['pnumber'];
  // $pk_id=0;
  // // $course=$_POST['select_course']
  // $DOB=$_POST['enter_dob'];

   $query="INSERT INTO table_student(st_name,st_email,st_ph_no) VALUES('$sname','$email',$pnumber)";
   $query1="SELECT * FROM table_student WHERE st_ph_no='$pnumber'";
   $query2="SELECT status_id FROM table_student WHERE st_ph_no='$pnumber'";
   // $query .="VALUES('$sname','$email','$pnumber')";

   $result1=mysqli_query($connection,$query1);
   $result2=mysqli_query($connection,$query2);


   print_r($status);
   session_start();
   $_SESSION['emailid']=$email;
   if(!empty(mysqli_fetch_assoc($result1))){

     $st=mysqli_fetch_object($result2);
     $status=$st->status_id;

      if ($status==2 || $status==NULL) {
        header("Location: http://localhost/demo/SAW/details.php?cid=$pnumber");
        exit();
      }
      else {
        $row=mysqli_fetch_assoc($result1);
        // print_r($row['st_name']);
        echo "Record already exists. Please login.";
      }


   }
   else{
     $result=mysqli_query($connection,$query);
     header("Location: http://localhost/demo/SAW/details.php?cid=$pnumber");
     exit();
   }
}


?>
