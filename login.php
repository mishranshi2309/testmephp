<?php
session_start();
if(isset($_POST['login'])){	

	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;

	setcookie('username',$user,time()+60);
	setcookie('password',$pass,time()+60);
	header('location:index.php');
}

?>

<html>
<head>
</head>
<body>
	<div>
		<form action="#" method="POST">
			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>" placeholder="Enter username..">
			</div>		
			<div>
				<label>password</label>
				<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" placeholder="Enter password..">
			</div>	
			<div>
				<input type="submit" name="login" value="login">
			</div>		
		</form>
	</div>
</body>
</html>
