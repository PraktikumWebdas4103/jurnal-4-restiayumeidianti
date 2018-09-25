<form action="" method="POST">
<center><h2 style="font-family: Kristen ITC; text-shadow: 20%">PROFILE</h2></center>
	<table>
		<tr>
			<td>Photo</td>
			<td> <input type="file" name="photo" style="width: 80px; height: 20px; border-radius: 10%"> </td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td> : </td>
		</tr>
		<tr>
			<td><input type="checkbox" name="option[]">Acting</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="option[]">Backpacking Travel</td>
		</tr>
		<tr>	
			<td><input type="checkbox" name="option[]">Badminton</td>
		</tr>
		<tr>	
			<td><input type="checkbox" name="option[]">Football</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="option[]">Swimming</td>
		</tr>
		<tr>	
			<td><input type="checkbox" name="option[]">Ballet</td>
		</tr>
		<tr>	
			<td><input type="checkbox" name="option[]">Dancing</td>
		</tr>	
		<tr>
			<td><input type="checkbox" name="option[]">Music</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="option[]">Programming</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="option[]">Other hobby</td>
		</tr>

	</table>


<?php
	if(isset($_POST['submit'])) {
		$photo = $_POST['photo'];
		$hobby =$_POST['hobby'];
	}

?>
</form>