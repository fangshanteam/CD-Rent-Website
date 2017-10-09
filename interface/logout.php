<?php
   session_start();
   session_destroy();
?>
<html>
<script type="text/javascript">
alert('Logout Success');
window.location = "index.php"
</script>
<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="login.php">disini</a> jika anda tidak di alihkan
</div>
</html>