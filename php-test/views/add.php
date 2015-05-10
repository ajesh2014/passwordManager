<?php
	
	require_once("../config.php");
	
	include(CONTROLLERS_PATH . "/AddController.php");

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Password Manager</title>
	</head>
	<body>
		<div id="login">
		<h2>Add application Form</h2>
			<form action="" method="post">
				<div><?php if(isset($error['appname'])){echo $error_message['appname'];} ?></div>
				<label>Application Name :</label>
				<input id="appname" name="appname" placeholder="name" type="text" value='<?php if(!empty($row['application'])){echo $row['application'];} ?>'>
				<div><?php if(isset($error['password'])){echo $error_message['password'];} ?></div>
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password"value='<?php if(!empty($row['password'])){ echo $row['password'];} ?>'>
				<div><?php if(isset($error['appname'])){echo $error_message['appname'];} ?></div>
				<label>Secret Phrase :</label>
				<input id="sphrase" name="sphrase" placeholder="" type="text" value='<?php if(!empty($row['sphrase'])){echo $row['sphrase'];} ?>'>
				<input id="id" name="id"  type="hidden" value='<?php  echo $_GET['id']; ?>'>
				<input name="submit" type="submit" value=" save ">
			</form>
		</div>
	</body>
</html>