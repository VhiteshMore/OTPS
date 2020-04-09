<html>

<head>
	<script src="jquery-3.3.1.js"></script>
	<link href="StyleSheets/styleU.css" rel="stylesheet">
	<script type="text/javascript">

	</script>
</head>
<body>

	<?php
	session_start();
	$uname=$_SESSION['user'];
	 ?>

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
		<div class="profile">
			<h1>profile</h1>
			<div class="details">
			<label id="l1">username :</label><input type="text" class="profile-input" name="username" value="<?php echo $_SESSION['user'] ?>" readonly><br>
			<label id="l2">email :</label><input type="text" class="profile-input" name="emailId" value="<?php echo $_SESSION['email'] ?>" readonly><br>
			<label id="l3">Contact No. :</label><input type="text" class="profile-input" name="mobile" value="<?php echo $_SESSION['mobile'] ?>" readonly><br>
			</div>
			<div class="qr-code">
					<img src="./images/<?php echo $_SESSION['user'] ?>.png" >
			</div>
		</div>
		<div class="Ccontainer">
			<div class="main-nav">
				<nav>
					<ul>
						<li><a href="tolldetails.php"> 	TollDetails </a></li>
						<li> <a href="wallet.php"> Wallet </a> </li>
					</ul>
				</nav>
			</div>
			<div class="transaction">
				<div id="Tdiv" style="overflow:auto">
					<h1>transaction:</h1>
					<p>All your transactions are here.</p>

					<?PHP
						$host=mysqli_connect("localhost","root","","users");
						if(!empty($host))
						{
								//echo "connection done";
						}
						$result = mysqli_query($host,"SELECT * FROM payment where username='$uname'");
					?>

					<table id="Ttbl">
					<tr>
						<th> <label>TransId</label> </th>
						<th><label >state </label></th>
						<th><label >NH.No. </label></th>
						<th><label >Name </label></th>
						<th><label >Location </label></th>
						<th><label >Section </label></th>
						<th> <label >VehicleType</label></th>
						<th> <label >Plan</label></th>
						<th> <label >Cost</label></th>
						<th> <label >Date&time</label></th>
					</tr>

					<?PHP
					while($row = mysqli_fetch_assoc($result))
					{?>

					<tr>
						<td>
						  <?php print $row['transId'];
								?>
						 </td>
						<td>
						  <?php print $row['state'];
								?>
						 </td>
						 <td>
						   <?php print $row['nhno'];
						 		?>
						  </td>
							<td>
							  <?php print $row['tollname'];
									?>
							 </td>
							 <td>
							   <?php print $row['location'];
							 		?>
							  </td>
								<td>
								  <?php print $row['section'];
										?>
								 </td>
								 <td>
								   <?php print $row['vehicle'];
								 		?>
								  </td>
									<td>
									  <?php print $row['plantype'];
											?>
									 </td>
									 <td>
									   <?php print $row['cost'];
									 		?>
									  </td>
										<td>
										  <?php print $row['cdatetime'];
												?>
										 </td>
					</tr>

					<?PHP
				  }?>

					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
