<html>
<body>
<?php
    session_start();
    $db=mysqli_connect('localhost','root','','users');
    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['signup-btn'])){
    	$uname=mysqli_real_escape_string($db,$_POST['signup-uname']);
    	$pass=mysqli_real_escape_string($db,$_POST['signup-pass']);
    	$email=mysqli_real_escape_string($db, $_POST['signup-email']);
    	$mobile=mysqli_real_escape_string($db,$_POST['signup-phno']);
      echo $uname."  ".$pass."  ".$email."  ".$mobile."\n";
      $errors=array();
      if(empty($uname)){
    	   array_push($errors,"username is required");
      }
      if(empty($pass)){
    	   array_push($errors,"password is required");
      }
      if(empty($email)){
    	   array_push($errors,"Email id is required");
       }
       if(empty($mobile)){
    	    array_push($errors,"mobile no is required");
        }
    //username is primary key
    //$password=md5($pass);// to encrypt password inside db
      $sql = "INSERT INTO userinfo(username, password, email, mobile) VALUES ('$uname','$pass','$email','$mobile')";
    		//header('location: users.php');
        if (mysqli_query($db, $sql)) {
          // include QR_BarCode class
          include "QR_BarCode.php";
          // QR_BarCode object
          $qr = new QR_BarCode();

          // create text QR code
          $qr->text("$uname");

          $qr->qrCode(350,"images/$uname.png");
          // display QR code image
          //$qr->qrCode();
          echo "New record created successfully";
          $_SESSION['user']=$uname;
          $_SESSION['email']=$email;
          $_SESSION['mobile']=$mobile;
          header('location: users.php');
        }
        else {
          echo "Error: " . $sql . mysqli_error($db);
        }
    }
    elseif(isset($_POST['login-btn'])){
      $uname=mysqli_real_escape_string($db,$_POST['logname']);
    	$pass=mysqli_real_escape_string($db,$_POST['logpass']);
      echo "enter correct username and password";
      $errors=array();
      if(empty($uname)){
      	array_push($errors,"username is required");
      }
      if(empty($pass)){
      	array_push($errors,"password is required");
      }
      $sql ="SELECT * from userinfo";
      $result=mysqli_query($db,$sql);
      if ($result) {
        echo "query executed Successfully";
      }
      else {
        echo "Error: " . $sql. mysqli_error($db);
      }
      if (mysqli_num_rows($result)>0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
      /*  echo "username: " . $row["username"]. " - password: " . $row["password"]. "\n";*/
        if($uname==$row["username"] && $pass==$row["password"]){
          $_SESSION['user']=$uname;
          $_SESSION['email']=$row["email"];
          $_SESSION['mobile']=$row["mobile"];
          header('location: users.php');
        }
      }
      } else {
        echo "enter correct username and password";
        header('location: users.php');
      }
    }
  ?>

</body>
</html>
