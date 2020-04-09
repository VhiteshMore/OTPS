<html><body>
<?php
session_start();
echo $_SESSION['user']."<br>";
echo $_SESSION['email']."<br>";
echo $_SESSION['mobile']."<br>";
session_destroy();
header('location:index.html');
?>
</body></html>
