<?php

	require_once("../config.php");
	
	include(CONTROLLERS_PATH . "/SecurityController.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Password Manager</title>
	</head>
	<body>
		<div id="login">
		<h2>Edit application Form</h2>
		
			<form action="" method="post">
				<div><?php if(isset($error['sphrase'])){echo $error_message['sphrase'];} ?></div>
				<label>Application Name :</label>
				<input id="sphrase" name="sphrase" placeholder="" type="text" value='<?php if(!empty($row['sphrase'])){echo $row['sphrase'];} ?>'>
				
				<input id="id" name="id"  type="hidden" value='<?php  echo $_GET['id']; ?>'>
				<input id="action" name="action"  type="hidden" value='<?php  echo $_GET['action']; ?>'>
				<input name="submit" type="submit" value=" save ">
			</form>
		</div>
	</body>
</html>