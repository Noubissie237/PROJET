 <?php
	$serveur = "localhost";
	$pass = "";
	$login = "root";
	 try{
		$bd = new PDO("mysql:host=$serveur;dbname=site", $login, $pass);
		$bd ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connexion réussi!<br/>";
		
}		
	 catch(PDOException $e){
		 echo "Echec : ".$e->getMessage();
	 }
 ?>