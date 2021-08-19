<!DOCTYPE html>
 <html>
   <head>
      <title> JOINTURES ENTRE TABLE </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
		/* Il existe 04 types de jointures dont 03 de type externes et 01 de type interne.
		   .Comme jointure interne, nous avons le "INNER JOIN": ici, son utilisation ne va retourner de resultats que lorsqu'il y'a une correspondance entre les deux tables
		     -les jointures de type externes quant a elles  vont nous retourner des données meme lorqu'il y'aura pas de correspondance dans la seconde table.
		   .Comme jointure externe, nous avons:
		      -> le FULL OUTER JOIN
			  -> le LEFT JOIN
			  -> le RIGHT JOIN
		*/
		$login = "root";
		$serveur = "localhost";
		$pass = "";
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2;charset=utf8", $login, $pass);
				$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connexion réussie ! <br/>";
				    /* on recupère les informations relatives a notre colonne "prenom" de la table "inscrits" et les informations relatives a la colonne "commentaire" de la table "commentaires";
					   on effectue le join entre la table "inscrits" et la table "commentaires".
					   et se join s'effectue a partir de la colonne "id" de notre table "inscrits" et la colonne "id_inscrit" de notre table "commentaires"
					*/
				$jointure_int ="SELECT inscrits.prenom, commentaires.commentaire
							FROM inscrits INNER JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit";
				
				$requette = $connexion -> prepare($jointure_int);
				$requette -> execute();
				  echo "Jointure établie avec succès ! <br/>";
				    
				  $resultat = $requette -> fetchall();
				  
				    echo '<pre>';
						print_r($resultat);
				    echo '</pre>';
			}
			catch(PDOException $e){
				echo "Echec : ".$e->getMessage();	
			}
		
     ?>
  </body>
 </html>