
<?php
  session_start();
  $date = date("Y-m-d H:i:s");  //set current date and time
  $uname=$_SESSION['user'];
  $db=mysqli_connect('localhost','root','','users');
  if(!empty($db))
  {
      //echo "connection done";
  }//get current balance
 $result = mysqli_query($db,"SELECT balance FROM userinfo where username='$uname'");
 $row = mysqli_fetch_assoc($result);
 $bal=$row['balance'];

 if(isset($_POST['addsub'])){
   $bank=$_POST['bank'];
   $amt=$_POST['amount'];
   $nuser=$_POST['username'];
   $npass=$_POST['pass'];
   $b2=$bal+$amt;
   $sql="INSERT INTO wallet (username,bank,amount,Nusername,Npassword,cdatetime) VALUES ('$uname','$bank','$amt','$nuser','$npass','$date')";
   if (mysqli_query($db, $sql)) {
     echo "New record created successfully";
     if( !empty($b2) ){
       $sql1="UPDATE userinfo SET balance='$b2' WHERE username='$uname' ";
       if (mysqli_query($db, $sql1)) {
         echo "balance updated successfully";
       }else {
         echo "Error: " . $sql1 . mysqli_error($db);
       }
     }
   }else {
     echo "Error: " . $sql . mysqli_error($db);
   }
 }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wallet</title>
    <link rel="stylesheet" href="./StyleSheets/wallet.css">
    <script type="text/javascript">
        function check(){
          var amt= document.getElementById('amount').value;
          var ft = parseInt(amt);
          console.log("amount: "+amt);
          if(ft < 0){
            alert("Amount can't be less than zero");
          }
        }
    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="head-top">
        <header>
          <div id="head-main">
            <h1>ONLINE TOLL PAYMENT SYSTEM </h1>
          </div>
          <nav>
            <ul>
              <li><a href="destroy.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </nav>
        </header>
      </div>
      <div class="main-nav">
        <nav>
          <ul>
            <li><a href="users.php"> GoTo Dashboard </a></li>
            <li> <a href="tolldetails.php"> TollDetails </a> </li>
          </ul>
        </nav>
      </div>
      <center>
      <div class="section">
          <div class="prev-bal">
            <h2>Balance in your otps wallet</h2>
            <p>Your current balance is : <input type="text" name="balance" id="balance" value="<?php echo $bal ?>" readonly></p>
          </div>
          <hr>
          <div class="add-bal">
            <p>You can add balance to your wallet by net banking.</p>
            <p>Select your bank and fill the necessary details</p>
            <form class="" name="formadd" id="formadd" action="" method="post">
              <table id="tblwallet">
                <tr>
                  <td> <label class="winput" > Bank: </label></td>
                  <td> <select class="ainput" id='bank'  name="bank">
                    <option value="State bank of india"> State bank of india </option>
                    <option value="Axis bank"> Axis bank </option>
                    <option value="ICICI bank"> ICICI bank </option>
                    <option value="Bank of Maharashtra"> Bank of Maharashtra </option>
                    <option value="Citi bank"> Citi bank </option>
                    <option value="Kotak bank"> Kotak bank </option>
                    <option value="Canara bank"> Canara bank </option>
                  </select> </td>
                </tr>
                <tr>
                  <td> <label class="winput"> Enter the amount: </label> </td>
                  <td> <input class="ainput" type="text" name="amount" id="amount" value="" onfocusout="javascript:check();"> </td>
                </tr>
                <tr>
                  <td> <label class="winput"> Enter your NetBanking username:</label> </td>
                  <td> <input class="ainput" type="text" name="username" id="username" value=""> </td>
                </tr>
                <tr>
                  <td> <label class="winput"> Enter your password: </label> </td>
                  <td> <input class="ainput" type="password" name="pass" id="pass" value=""> </td>
                </tr>
              </table>
              <input type="submit" name="addsub" id="addsub" value="Add money">
            </form>
          </div>
      </div>
    </center>
  </div>
  </body>
</html>
