<?php
   require_once("koneksi.php");

   
   if(isset($_POST['username'])==null){
	   echo "<div align='center'>access denied for user 'root'@'localhost'";
	   header( "refresh:1;url=index.php" );
	   //|| !$password || !$firstname || !$lastname || !$country || !$address || !$city || !$postcode || !$email || !$phone
   }
   else{
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   $firstname = $_POST['firstname'];
	   $lastname = $_POST['lastname'];
	   $country = $_POST['country'];
	   $address = $_POST['address'];
	   $city = $_POST['city'];
	   $postcode = $_POST['postcode'];
	   $email = $_POST['email'];
	   $phone = $_POST['phone'];
   
  
   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
     if(!$username || !$password || !$firstname || !$lastname || !$country || !$address || !$city || !$postcode || !$email || !$phone) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
     } else {
		 
		if($query->num_rows != 0) {
			echo "<div align='center'>Username Sudah Terdaftar! <a href='register.php'>Back</a></div>";
   } 
   else {
	   $data = "INSERT INTO user VALUES ('$username',PASSWORD('$password'), '$firstname', '$lastname', '$country', '$address', '$city', '$postcode', '$email', '$phone')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
	   
   }
       
     }
   }
   
   
   
?>