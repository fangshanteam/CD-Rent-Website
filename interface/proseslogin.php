<?php
   session_start();
   require_once("koneksi.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username'];

}

function fix_inject($data){

$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));

return $filter;

}
   
   $username = fix_inject($_POST['username']);
   $password = fix_inject($_POST['password']);

   
   $sql = "SELECT * FROM user WHERE username='$username' AND password=password('$password')";
   
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Your username or password is wrong! <a href='login.php'>Back</a></div>";
   } 
   else 
   {
     $_SESSION['username'] = $hasil['username'];
	   if($username == admin)
	   {
		   echo "<script>alert('WELCOME YOU ARE LOGGED AS ADMINISTRATOR'); location.href='profile.php';</script>";
	   }
	   else
	   {
		   echo "<script>alert('WELCOME YOU ARE LOGGED AS USER'); location.href='profile.php';</script>";
	   }
   }
?>
