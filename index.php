<?php
session_start();
if(!isset($_SESSION['username'])){	
	header('location:login.php');
}
else{
	$user=$_SESSION['username'];
}
?>
<html>
<head>
</head>
<body>
	<div>
		<form action="display.php" method="POST">
			<div>
				<label>Roll No.</label><br/>
				<input type="text" name="rno" value="" placeholder="Enter Roll no..">
			</div>
			<div>
				<label>Full name.</label><br/>
				<input type="text" name="name" value="" placeholder="Enter Full name..">
			</div>
			<div>
				<label>marks 1.</label><br/>
				<input type="text" name="m1" value="" placeholder="Enter mark 1..">
			</div>
			<div>
				<label>marks 2.</label><br/>
				<input type="text" name="m2" value="" placeholder="Enter mark 2..">
			</div>
			<div>
				<label>marks 3.</label><br/>
				<input type="text" name="m3" value="" placeholder="Enter mark 3..">
			</div><br/>
			<div>
				<input type="submit" name="submit" value="submit">
			</div>		
		</form>
	</div>
</body>
</html>
