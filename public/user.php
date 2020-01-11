<?php
$dbh = new PDO('mysql:host=database-1.c83wnfbwpyhm.us-east-1.rds.amazonaws.com;dbname=profile_page', 'admin', 'shrestha');
$select_st =$dbh->prepare ('SELECT name, body, filename, created_at FORM user ORDER BY id ASC');
$select_sth->execute();
$row = $select_sth->feathAll();
?>

<?php
<form action ="dash.php" method ="post">
	Username <input type = "text" name ="user">
	Password <input type = "password" name ="password">
	Re-Password <input type = "password" name ="repassword">
	<button type = "submit">Submit</button>
	</form>
?>
