<!DOCTYPE html>
 <html>
   <head>
      <title> PHP et MySQL</title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	    // pdo(php data objet) et mysqli sont des extentions permettant d'etablir une connexion avec mysql
		// pdo est le plus utilisé
		// pour etablir cette connection via l'extention pdo, on a besoin de 04 infos:
		/*  1) le nom de l'hote: qui est le nom du serveur ou MySQL est installé "localhost" dans notre cas car nous travaillons en local
		    2) le nom de la BD a laquelle nous souhaitons nous connecter
			3) le nom d'utilisateur
			4) le mot de pass: sur WINDOWS, il y'en a pas or sur MAC, le mot de pass c'est "root"
		*/
               $serveur = 'localhost';
			   $login = 'root';
			   $pass = '';
			   
                  try{
					  $connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
					  $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					  echo "Connexion à la Base de Données réussie !";
				  }
				  catch(PDOException $e){
					  echo "Echec de connexion : ".$e->getMessage();
				  }
				  // le code ci dessus permet de se connecter a une base de donnée deja existante
				
				
				
				// maitenant, nous avons créer une base de données. le code est toujours le meme a la seule difference qu'on enleve le dbname qui est le nom de la base de donnee
				
	     $serveur = "localhost";
           $login = "root";
           $pass = "";

					try{
						$connexion = new PDO("mysql:host=$serveur", $login, $pass);
						$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$connexion -> exec("CREATE DATABASE test2"); // creation de la BD
						
						echo "Base de Données créée";
					}
					catch(PDOException $e){
						echo "Echec : ".$e->getMessage();
					}
		   
		   // une fois la base de données "test2" créée, nous nous connectons maintenant a l'interieur pour y jouer un peu
		   
		   $serveur = "localhost";
		   $login = "root";
		   $pass = "";
		   
		   try{
			   $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
			   $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   echo 'Connexion réussie <br/>';
			   // NB: UNSIGNED permet de prendre uniquement les entiers naturel positif et de supprimer les negatifs; ainsi, la valeur maximal des entiers positifs sera doublée.
			   $codesql ="CREATE TABLE visiteurs(
			           id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					   nom VARCHAR(50),
					   prenom VARCHAR(50),
					   email VARCHAR (70)
			   )";
			   
			   $connexion->exec($codesql);
			   echo "La table visiteurs a été crée";
		   }
		   catch(PDOException $e){
			   echo "Echec de connexion : ".$e->getMessage();
		   }
	 ?>
  </body>
 </html>