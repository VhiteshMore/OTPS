<html>
<body>
<?PHP



	$host=mysqli_connect("localhost","root","","users");
	if(!empty($host))
	{
			echo "connection done";
	}

	$result = mysqli_query($host,"SELECT * FROM payment where username='abc1234'");
?>
<table border="1">
<tr>
<th>username</th>
<th>tid</th>
<th>state</th>
<th>nhno</th>
<th>tollname</th>
<th>location</th>
<th>section</th>
<th>vehicle</th>
<th>plan</th>
<th>cost</th>
<th>dt</th>
</tr>
<?PHP
while($row = mysqli_fetch_assoc($result))
{?>
<tr>
<td>
  <?php print $row['username'];
		?>
 </td>
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

</html>
