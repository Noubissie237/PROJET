<!DOCTYPE html>
 <html>
   <head>
      <title> MISE A JOUR ET SUPPRESSION DE DONNEES </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	  // dans ce nouveau chapitre nous allons voir comment mettre a jour et supprimer des données d'une base de données.
	  
	  // connexion a la BD:
	  
	     $serveur = "localhost";
		 $login = "root";
		 $pass = "";
		 
		    try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
				$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				  echo "Connexion réussie ! <br/>";
				  
				 // modifions l'age de Ngollo pour mettre 18ans
				 
				 $requette = $connexion -> prepare(" UPDATE visiteurs SET Age ='18' WHERE id='13' ");
				 $requette -> execute();
				 echo "modification réussie ! <br/>";
                // suppresion de l'enregistrement Chiedje de la table.
				
			$supp = $connexion -> prepare("DELETE FROM visiteurs WHERE id='10' ");
			$supp -> execute();
			  echo "Element supprimé avec succès ! <br/> ";
			  // classement des elements par ordre croissant d'id
			  
			  $class = $connexion -> prepare("SELECT * FROM visiteurs ORDER BY id ASC");
			  $class -> execute();
			   echo "Elements classés avec succès ! <br/>";
			   // suppresion de la table visiteurs
			   
			 $sup = $connexion -> prepare("DROP TABLE visiteurs");
			 $sup -> execute();
			  echo "Table supprimé avec succès !<br/>";
			}
			catch(PDOException $e){
				echo "Echec : ".$e -> getMesssage();
			}
	 ?>
  </body>
 </html>