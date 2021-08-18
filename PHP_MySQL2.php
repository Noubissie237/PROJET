<!DOCTYPE html>
 <html>
   <head>
      <title> OPERATION SUR LES BD </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // ici, nous allons utiliser les requettes preparés car elles sont beaucoup plus sécurisés. cella se fait a l'aide des marqueurs
	    $pass = "";
		$serveur = "localhost";
		$login = "root";
		
		try{
			
			$connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connexion réussi ! <br/>";
			
              $requette = $connexion -> prepare("INSERT INTO visiteurs(Nom,Prenom,Email)VALUES
			                                 (:nom, :prenom, :email)"); // creation des marqueurs nom prenom et email
						 $requette -> bindParam(':nom', $nom);
						 $requette -> bindParam(':prenom', $prenom);
						 $requette -> bindParam(':email', $email); // liaison des marqueurs avec les variables y correspondantes
						 
						      $nom = "Ngollo";
							  $prenom = "Biloa";
							  $email = "ngollobiloa2017@gmail.com"; // attribution des valeurs aux variables 
							  
							   $requette -> execute(); 
							   
					echo "Ajout réussi !";
		}	
		catch(PDOException $e){
			echo "Echec : ".$e->getMessage();
		}
	 ?>
  </body>
 </html>