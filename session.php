
<?php
require('config.php');
session_start();

$user_email=$_SESSION['user_email'];
$user_role =$_SESSION['user_role'];
$ses_sql=mysqli_query($conn,"SELECT * FROM user WHERE userEmail = '$user_email' AND userRole = '$user_role'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['userId'];
$userEmail = $row['userEmail'];
$userRole = $row['userRole'];



if(!isset($login_session)){
     echo "<script>window.location.href = 'boxed-signin.php';</script>";
// header('Location: boxed-signup.php'); 
}
?>
