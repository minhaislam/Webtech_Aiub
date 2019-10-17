<?php
	//$name;
	//$email=$_POST["email"];
	//$dob=$_POST["day"];
	//$dob1=$_POST["month"];
	//$dob2=$_POST["year"];
	//$gender=$_POST['gender']
	//$degree=$_POST["checkbox"];
	//$bg=$_POST["Group"];
	
if(isset($_POST['submit'])){

		$name = $_POST['name'];
		

		if(empty($name) == true){
			echo "null submission!";
		}
		else{
            $_POST['name'] = $name;
            echo "$name";
			}

		}

		if(isset($_POST['submit1'])){

		$email = $_POST['email'];
		

		if(empty($email) == true){
			echo "null submission!";
		}
		else{
            $_POST['email'] = $email;
            echo "$email";
			}

		}

		if(isset($_POST['submit2'])){

		$dob1 = $_POST['day'];
		$dob2 = $_POST['month'];
		$dob3 = $_POST['year'];


		if(empty($dob1) == true && empty($dob2) == true && empty($dob3) == true){
			echo "null submission!";
		}
		else{
            $_POST['day'] = $dob1;
            $_POST['month'] = $dob2;
            $_POST['year'] = $dob3;
            echo "$dob1"."/".$dob2."/".$dob3;

			}

		}

		if(isset($_POST['submit3'])){

		$gender = $_POST['radio'];
		

		if(empty($gender) == true){
			echo "null submission!";
		}
		else{
            $_POST['radio'] = $gender;
            echo "$gender";
			}

		}

		if(isset($_POST['submit4'])){

		$degree = $_POST['checkbox'];
		

		if(!empty($degree) == true){
			//echo "null submission!";
		
		
			foreach($_POST['checkbox'] as $degree){
				echo $degree."</br>";
			}
            //$_POST['checkbox'] = $degree;
            //echo "$degree";
		}

		}


			if(isset($_POST['submit5'])){

		$bg = $_POST['blood'];
		

		if(empty($bg) == true){
			echo "null submission!";
		}
		else{
            $_POST['blood'] = $bg;
            echo "$bg";
			}

		}


	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="Lab4.1.php">
		<fieldset>	
			<legend>NAME</legend>
			<table cellpadding="5px">
			<tr>
				<td>
			<input type="text" name="name" value="<?= $name;?>">
			</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;">
			<input type="submit" name="submit">
			</td>
			</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>EMAIL</legend>
			<table cellpadding="5px">
			<tr>
				<td>
			<input type="email" name="email">
			</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;">
			<input type="submit" name="submit1">
			</td>
			</tr>
			</table>

		</fieldset>		

		<fieldset>
			<legend>DATE OF BIRTH</legend>
			<table cellpadding="5px">
			<tr>
				<td>
			date:<br><input type="text" name="day"> /
		</td>
		<td>
			month<br>
			<input type="text" name="month">   /
			</td>
			<td>
				yyy<br>
			<input type="text" name="year">   

			</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;" colspan="3">
			<input type="submit" name="submit2">
			</td>
			<td></td>
			<td></td>
			</tr>
			</table>

		</fieldset>		


		<fieldset>
			<legend>GENDER</legend>
			<table cellpadding="5px">
			<tr>
				<td>
			<input type="radio" name="radio" value="Male"/>Male
			<input type="radio" name="radio" value="Female"/>Female
			<input type="radio" name="radio" value="Other"/>Other
		</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;">
			<input type="submit" name="submit3">
			</td>
			</tr>
			</table>

		</fieldset>	

		<fieldset>
			<legend>DEGREE</legend>
			<table cellpadding="5px">
			<tr>
				<td>
			<input type="checkbox" name="checkbox[]" value="SSC"/>SSC
			<input type="checkbox" name="checkbox[]" value="HSC"/>HSC
			<input type="checkbox" name="checkbox[]" value="BSc"/>BSc
			<input type="checkbox" name="checkbox[]" value="MSc"/>MSc
		</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;">
			<input type="submit" name="submit4">
			</td>
			</tr>
			</table>

		</fieldset>		

		<fieldset>
			<legend>BLOOD GROUP</legend>
			<table cellpadding="5px">
			<tr>
				<td>
				<select name="blood">
							<option value=""></option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B+">B+</option>
				</select>
		</td>
			</tr>
			<tr>
		
				<td style="border-top:1px solid #888;">
			<input type="submit" name="submit5">
			</td>
			</tr>
			</table>

		</fieldset>	


	</form>


</body>
</html>