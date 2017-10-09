<?php
   session_start();
   require_once("koneksi.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username'];

}
   
   $password = $_POST['password'];
   $newpassword = $_POST['newpassword'];

   
   $sql = "SELECT * FROM user WHERE password=password('$password')";
   
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0)
   {
     echo "<script>alert('Your Old Password is Wrong'); location.href='profile-setting.php';</script>";
   } 
   else 
   {
       $sql2 = "UPDATE user SET password=password('$newpassword') WHERE password=password('$password')";
       $simpan = $db->query($sql2);
       if($simpan)
	   {
         echo "<script>alert('Password Changed!'); location.href='profile.php';</script>";
       }
	   else
	   {
         echo "<script>alert('Proccess Failed'); location.href='profile-setting.php';</script>";
       }
     }
?>