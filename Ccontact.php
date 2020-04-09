<html>
  <head>
  </head>
  <body>
    <?php
    $db=mysqli_connect('localhost','root','','users');
    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['sub-btn'])){
      $email=mysqli_real_escape_string($db,$_POST['email']);
    	$text=mysqli_real_escape_string($db,$_POST['textq']);

      echo $email."  ".$text."\n";
      $errors=array();
      if(empty($email)){
    	   array_push($errors,"username is required");
      }
      if(empty($text)){
    	   array_push($errors,"password is required");
      }

      $sql = "INSERT INTO contact(email, message) VALUES ('$email','$text')";
    		//header('location: users.php');
        if (mysqli_query($db, $sql)) {
          echo "New record created successfully";
          header('location:contact.html');
        }else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }

    ?>
  </body>
</html>
