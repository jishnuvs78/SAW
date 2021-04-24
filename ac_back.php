
<?php
if(isset($_POST['submit'])){

$connection=mysqli_connect('localhost','root','','application_form');

session_start();
$st_id=$_SESSION['s_id'];

$ten_res=$_POST['10_qual'];
$twelve_res=$_POST['12_qual'];
// $dept
// $e_cred_type
// $e_cred

if (count($_POST)==4) {
}
$query1="UPDATE tab_application SET application_status_id='1' WHERE student_reference_id='$st_id'";
$result1=mysqli_query($connection,$query1);
else {
  $query2="UPDATE tab_application SET application_status_id='2' WHERE student_reference_id='$st_id'";
  $result2=mysqli_query($connection,$query2);
}

}

 ?>
