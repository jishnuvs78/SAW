<?php
if(isset($_POST['submit'])){


$connection=mysqli_connect('localhost','root','','application_form');

  $cnum=count($_POST);

  $numberList = array('email','enter_no','address_line1','address_line2','pin');

  $email=$_POST['email'];
  $pnumber=$_POST['enter_no'];
  $address1=$_POST['address_line1'];
  $address2=$_POST['address_line2'];
  $pin=$_POST['pin'];

  // $i=1;
  // $name=$numberList[$i];
  // echo $name;
  // echo $pnumber;
  // echo $_POST[$name];

  for($i=0;$i<count($_POST);$i++){
    $name=$numberList[$i];
    if ($_POST[$name]==NULL) {

      $cnum--;
    }
  }

  $query="UPDATE table_student SET status_id=1 WHERE st_ph_no='$pnumber'";
  $query1="UPDATE table_student SET status_id=2 WHERE st_ph_no='$pnumber'";
  $query2="INSERT INTO table_student_details(st_address1,st_address2,pincode,st_email,st_ph_no) ";
  $query2.="VALUES('$address1','$address2','$pin','$email',$pnumber)";

  $query3="SELECT * FROM table_student_details WHERE st_ph_no='$pnumber'";

  $result3=mysqli_query($connection,$query3);
  if (!empty(mysqli_fetch_assoc($result3))) {
    $num=mysqli_fetch_object($result3);
    $id=$num->pk_id;
    $query4="UPDATE table_student_details SET st_email='$email',st_ph_no='$pnumber',pincode='$pin',";
    $query4.="st_address1='$address1',st_address2='$address2' WHERE pk_id='$id'";

    $result4=mysqli_query($connection,$query4);
  }
  else {
    $result2=mysqli_query($connection,$query2);
  }


  if ($cnum==5) {
    $result=mysqli_query($connection,$query);
    $result3=mysqli_query($connection,$query3);
    $num=mysqli_fetch_object($result3);
    $id=$num->pk_id;
    $myid=uniqid($id);
    $query5="UPDATE table_student_details SET app_id_gen='$myid' WHERE st_ph_no='$pnumber'";
    $result5=mysqli_query($connection,$query5);
    $query6="INSERT INTO table_student_academic_details(app_id) VALUES('$myid')";
    $result6=mysqli_query($connection,$query6);
    $query7="INSERT INTO tab_application(student_reference_id) VALUES('$myid')";
    $result7=mysqli_query($connection,$query7);
    echo "st details complete";
  }
  else {
    $result1=mysqli_query($connection,$query1);
  }


}

 ?>
