<?php
	
	 $Uname= $_POST['uname'];
	 $Pass= $_POST['pass'];
	 $Dob= $_POST['dob'];
	 $Tarea= $_POST['tarea'];
	 $Select= $_POST['select'];
	 $Gender= $_POST['gender'];
	 //$Checkbox= $_POST['option'];
	 
    foreach($_POST['option'] as $option);
	echo $Uname." ".$Pass." ".$Dob." ".$Tarea." ".$Select." ".$Gender." ".$option;
//print_r($_POST)
?>