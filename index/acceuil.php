<?php $auth = 0; ?>
<?php include "include.php" ?>
<?php include "header.php"; ?>



<?php
//$bd = include 'bd.php';

	if(isset($_POST['username']) && isset($_POST['password'])){
		$password = sha1($_POST['password']);
		//var_dump($sql);
		
		$select = $bd->query("SELECT * FROM users WHERE username ='{$_POST['username']}' AND password = '$password' ");
		if($select->rowCount() > 0 ){
			$_SESSION['auth']=$select->fetch();
			header('Location:site.html');
		}
	}
?>




<form action="#" method = "POST">
	<div class = "form-group">
		<label for "username">Nom d'utilisateur</label>
		<input type = "text" class = "form-control" id = "username" name = "username">
	</div>
	
	<div class = "form-group">
		<label for "password">Password</label>
		<input type = "password" class = "form-control" id = "password" name= "password">
	</div>
	<button type = "submit" class = "btn btn-default"> Se connecter </button>
</form>
<?php include "footer.php"; ?>
