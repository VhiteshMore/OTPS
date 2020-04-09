
<?php
  session_start();
  $uname=$_SESSION['user'];
  $phno=$_SESSION['mobile'];

//echo $state;
$db=mysqli_connect('localhost','root','','users');
if(!$db)
{
   die("Connection failed: " . mysqli_connect_error());
} //get current balance
$result = mysqli_query($db,"SELECT balance FROM userinfo where username='$uname'");
$row = mysqli_fetch_assoc($result);
$bal=$row['balance'];

function generateRandomString($length = 10) {
return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
$tid="PAYID".generateRandomString();    //generate transaction id
$date = date("Y-m-d H:i:s");  //set current date and time
  //database connection
  if(isset($_POST['tollbtn'])){
    $state=$_POST['state'];
    $nhno=$_POST['nhno'];
    $tollname=$_POST['tollname'];
    $tollLoc=$_POST['tollLoc'];
    $stretch=$_POST['stretch'];
  }
  elseif(isset($_POST['paybtn'])){
    echo "main form";
    $state=$_POST['state'];
    $nhno=$_POST['nhno'];
    $tollname=$_POST['tollname'];
    $tollLoc=$_POST['tollLoc'];
    $stretch=$_POST['stretch'];
    $vtype=$_POST['vtype'];
    $ptype=$_POST['ptype'];
    $cost=$_POST['cost'];
    echo $bal;
    echo $cost;
  $sql = "INSERT INTO payment(username, transId, state, nhno,tollname,location,section,vehicle,plantype,cost,cdatetime) VALUES ('$uname','$tid','$state','$nhno','$tollname','$tollLoc','$stretch','$vtype','$ptype','$cost','$date')";
  if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
  }else {
    echo "Error: " . $sql . mysqli_error($db);
  }
  $b2=$bal-$cost;
  $sql1="UPDATE userinfo SET balance='$b2' WHERE username='$uname' ";
  if (mysqli_query($db, $sql1)) {
    echo "balance updated successfully";

    // Authorisation details.
    $username = "vhiteshm17@gmail.com";
      $hash = "498a358422f26f403a72bc7f4e106f037f785dae0850855b7b1a8659eae0fac1";
      // Config variables. Consult http://api.textlocal.in/docs for more info.
      $test = "0";
      // Data for text message. This is the text message data.
      $sender = "TXTLCL"; // This is who the message appears to be from.
      $numbers = "91".$phno; // A single number or a comma-seperated list of numbers
      $message = "Thank you ".$uname.","." Your TransactionId is ".$tid;
      // 612 chars or less
      // A single number or a comma-seperated list of numbers
      $message = urlencode($message);
      $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
      $ch = curl_init('http://api.textlocal.in/send/?');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch); // This is the result from the API
      curl_close($ch);
      echo($result);

  }else {
    echo "Error: " . $sql1 . mysqli_error($db);
  }
}

/* elseif(isset($_POST['fsub-btn'])){
  echo "popup form";
} */
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery-3.3.1.js"></script>
  <link href="StyleSheets/styleP.css" rel="stylesheet">
  <title></title>
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById('vtype').value = '';
      document.getElementById('ptype').value = '';
      document.getElementById('cost').value= '';
      var fcost=document.getElementById('fcost');
      if(fcost.value.length>6){
        console.log("fcost length "+fcost.value.length);
        document.getElementById('poppay').style.display='none';
      }
      else{
        console.log("fcost length "+fcost.value.length);
        document.getElementById('poppay').style.display='';
      }
    };
    function setcost(){
      var vt=document.getElementById('vtype').value;
      //console.log(vt);
      var pt=document.getElementById('ptype').value;
      //console.log(pt);
      if(vt.value != '' && pt.value != ''){
        if(vt == "Car/Jeep/Van/LMV/ThreeWheeler"){
          //console.log(vt.value);
          //console.log(pt.value);
          switch(pt){
            case 'single':
            document.getElementById('cost').value = "85";break;
            case 'return':
            document.getElementById("cost").value = "130";break;
            case 'monthly':
            document.getElementById("cost").value = "3000";break;
          }
        }else if(vt == "LCV/LGV/Minibus"){
          switch(pt){
            case 'single':
            document.getElementById("cost").value = "150";break;
            case 'return':
            document.getElementById("cost").value = "205";break;
            case 'monthly':
            document.getElementById("cost").value = "5000";break;
          }
        }else if (vt == "Bus/Truck") {
          switch(pt){
            case 'single':
            document.getElementById("cost").value = "250";break;
            case 'return':
            document.getElementById("cost").value = "375";break;
            case 'monthly':
            document.getElementById("cost").value = "8000";break;
          }
        }else if (vt == "3 Axel Vehicle") {
          switch(pt){
            case 'single':
            document.getElementById("cost").value = "285";break;
            case 'return':
            document.getElementById("cost").value = "430";break;
            case 'monthly':
            document.getElementById("cost").value = "10000";break;
          }
        }else if (vt == "4 to 6 Axel") {
          switch(pt){
            case 'single':
            document.getElementById("cost").value = "350";break;
            case 'return':
            document.getElementById("cost").value = "255";break;
            case 'monthly':
            document.getElementById("cost").value = "13000";break;
          }
        }else if (vt == "7 or more Axel") {
          switch(pt){
            case 'single':
            document.getElementById("cost").value = "470";break;
            case 'return':
            document.getElementById("cost").value = "675";break;
            case 'monthly':
            document.getElementById("cost").value = "15000";break;
          }
        }
        console.log("updated cost:"+document.getElementById("cost").value);
            }
      else{
        console.log("hello");
  }
  }
    function closepopup(){
      document.getElementById('poppay').style.display="none";
    }
    function check(){
      var bal1= document.getElementById('bal1');
      var cst1= document.getElementById('cost');
      var x1= parseInt(bal1.value);
      var y1= parseInt(cst1.value);
      console.log("bal:"+x1);
      console.log("cost:"+y1);
      if(x1 <= y1)
        {
          alert("You don't have sufficient balance.")
          document.getElementById('paybtn').disabled=true;
        }
        else if(x1 > y1){
          document.getElementById('paybtn').disabled=false;
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
          <li><a href="users.php"> 	GoTo Dashboard </a></li>
          <li><a href="tolldetails.php"> 	TollDetails </a></li>
          <li> <a href="wallet.php"> Wallet </a> </li>
        </ul>
      </nav>
    </div>
    <div class="profileP">
      <label for="">Username:</label><input type="text" name="usernameP" value="<?php echo $_SESSION['user'] ?>" readonly>
    </div>
    <div id="pay" style="overflow:auto">
      <form id="payform" name="payform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <center>
        <table id="paytbl">
          <tr>
            <td><label class="lt">state </label></td>
            <td><input class="ainput" type="text" name="state" id="state" value="<?php echo $state ?>" readonly></td>
          </tr>
          <tr>
            <td><label class="lt">NH.No. </label></td>
            <td><input class="ainput" type="text" name="nhno" id="nhno" value="<?php echo $nhno ?>" readonly></td>
          </tr>
          <tr>
            <td><label class="lt">Name </label></td>
            <td><input class="ainput" type="text" name="tollname" id="tollname" value="<?php echo $tollname ?>" readonly></td>
          </tr>
          <tr>
            <td><label class="lt">Location </label></td>
            <td><input class="ainput" type="text" name="tollLoc" id="tollLoc" value="<?php echo $tollLoc ?>" readonly></td>
          </tr>
          <tr>
            <td><label class="lt">Section </label></td>
            <td><input class="ainput" type="text" name="stretch" id="stretch" value="<?php echo $stretch ?>" readonly></td>
          </tr>
          <tr>
            <td> <label class="lt">Vehicle Type</label> </td>
            <td> <select class="ainput" name="vtype" id="vtype" >
                <optgroup label="select vehicle type">
                  <option value=""></option>
                  <option value="Car/Jeep/Van/LMV/ThreeWheeler">Car/Jeep/Van/LMV/Three wheeler</option>
                  <option value="LCV/LGV/Minibus">LCV/LGV/Minibus</option>
                  <option value="Bus/Truck">Bus/Truck</option>
                  <option value="3 Axel Vehicle">3 Axel Vehicle</option>
                  <option value="4 to 6 Axel">4 to 6 Axel</option>
                  <option value="7 or more Axel">7 or more Axel</option>
                </optgroup>
              </select> </td>
          </tr>
          <tr>
            <td> <label class="lt" for="ptype">plan</label> </td>
            <td> <select class="ainput" id="ptype" name="ptype" onfocusout="javascript:setcost();check();">
                <optgroup label="Select your plan">
                  <option value="single">Single</option>
                  <option value="return">Return</option>
                  <option value="monthly">Monthly</option>
                </optgroup>
              </select> </td>
          </tr>
          <tr>
            <td><label class="lt">cost </label></td>
            <td><input class="ainput" type="text" name="cost" id="cost" value="" readonly></td>
          </tr>
          <tr>
            <td> <input type="hidden" name="tid" id="tid" value="<?php echo $tid ?>" ></td>
            <td> <input type="hidden" name="bal1" id="bal1" value="<?php echo $bal ?>" > </td>
          </tr>
        </table>
      </center>
      <center>
        <input type="submit" id="paybtn" name="paybtn"  value="OK" >
      </center>
      </form>
    </div>
    <center>
    <div id="poppay">
      <form id="popupform" name="popupform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table id="popuptbl">
        <tr><td><label>username:</label></td><td><input class="binput" type="text" name="username" value="<?php echo $_SESSION['user'] ?>"></td></tr>
        <tr><td><label>phno:</label></td><td><input type="text" class="binput" name="phno" value="<?php echo $_SESSION['mobile']?>"></td></tr>
        <tr>
          <td> <label>TransactionId:</label> </td>
          <td> <input type="text" class="binput" name="tidf" id ="tidf" value="<?php echo $tid ?>"> </td>
        </tr>
        <tr>
          <td> <label>Cost:</label></td>
          <td><input type="text" class="binput" name="fcost" id="fcost" value="<?php echo $cost ?>"></td>
        </tr>
      </table>
    </form>
      <p>A Message will be sent to your registered mobile for payment conformation.</p>
      <input type="submit" id="fsub-btn" name="fsub-btn" value="OK" onclick="javascript:closepopup();">
    </div>
    </center>
  </div>
</body>
</html>
