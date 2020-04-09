<html>
<body>
<?php
	// Authorisation details.
	$username = "vhiteshm17@gmail.com";
	$hash = "498a358422f26f403a72bc7f4e106f037f785dae0850855b7b1a8659eae0fac1";
	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "919702749647"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script. chaio";
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
?>
</body>
</html>
