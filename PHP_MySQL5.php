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
		//1) UTILISATION DU INNER JOIN
		
		
		$login = "root";
		$serveur = "localhost";
		$pass = "";
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2;charset=utf8", $login, $pass); // le charset=utf8 permet de supprimer les erreurs dûs aux accents.
				$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connexion réussie ! <br/>";
				    /* on recupère les informations relatives a notre colonne "prenom" de la table "inscrits" et les informations relatives a la colonne "commentaire" de la table "commentaires";
					   on effectue le join entre la table "inscrits" et la table "commentaires".
					   et se join s'effectue a partir de la colonne "id" de notre table "inscrits" et la colonne "id_inscrit" de notre table "commentaires"
					*/
					// la requette ci dessous affiche tous les commentaires avec les noms de tous les gens ayant commenté
                       $requette = "
							SELECT inscrits.nom, commentaires.commentaire
							FROM inscrits INNER JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit
						";
						//celle ci parcontre affiche tous les commentaires de Giraud uniquement
	           /*          $requette = "
							SELECT inscrits.nom, commentaires.commentaire
							FROM inscrits INNER JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit
							WHERE inscrits.nom='Giraud'
						";
						*/
					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
					   echo "Jointure 1 établie avec succés !<br/>";
					   
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
					   
					   	// 2) UTILISATION DU LEFT JOIN ET DU RIGHT JOIN
		     //  -> le left join va nous permettre de recuperer tout le contenu de la table de gauche(qui est celle qui vient juste apres le FROM :dans le cas d'en haut cas sera la table inscrits) et seulement le contenu de la table de droite ayant une correspondance dans la table de gauche
			   // ici on ne recuperera que les commentaires liés a un auteur 
			                    $requette1 = "
							SELECT inscrits.nom, commentaires.commentaire
							FROM inscrits LEFT JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit
						";
	
					   $execution1 = $connexion ->prepare($requette1);
					   $execution1 -> execute();
					   echo "Jointure 2 établie avec succés !<br/>";
					   
					   $resultat1 = $execution1 -> fetchall();
					   echo '<pre>';
							print_r($resultat1);
					   echo '</pre>';
					  
					 // -> RIGHT JOIN: ici on va recuperer tous les commentaires meme ceux n'ayant pas d'auteur.

					   	      $requette3 = "
							SELECT inscrits.nom, commentaires.commentaire
							FROM inscrits RIGHT JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit
						";
	
					   $execution3 = $connexion ->prepare($requette3);
					   $execution3 -> execute();
					   echo "Jointure 3 établie avec succés !<br/>";
					   
					   $resultat3 = $execution3 -> fetchall();
					   echo '<pre>';
							print_r($resultat3);
					   echo '</pre>';
					   
					   // -> le FULL OUTER JOIN va recuperer toutes les informations demandé dans les deux tables, meme si celles ci n'ont pas de correspondance.
			 /*
			 					   	   $requette4 = "
							SELECT inscrits.nom, commentaires.commentaire
							FROM inscrits FULL OUTER JOIN JOIN commentaires
							ON inscrits.id = commentaires.id_inscrit
						";
	
					   $execution4 = $connexion ->prepare($requette4);
					   $execution4 -> execute();
					   echo "Jointure établie avec succés !<br/>";
					   
					   $resultat4 = $execution4 -> fetchall();
					   echo '<pre>';
							print_r($resultat4);
					   echo '</pre>';    */
					   // mais il est a noter que le full outer join n'est pas toujours supporté par tout les SGBD, pour cela, il va donc faloir faire une union comme suit
					   // il est strictement neccessaire de s'assurer que le nombre de colone ciblé est identique pour chaque SELECT
					   // il est aussi a remarqué qu'il ne gere pas le redondance: donc si on veut afficher les noms, il n'affichera que le premier nom. on a donc
					   
					   $requette4 = "
					      SELECT nom FROM inscrits
						  UNION
						  SELECT commentaire FROM commentaires
					   ";
					   	   $execution4 = $connexion ->prepare($requette4);
					   $execution4 -> execute();
					   echo "Jointure 4 établie avec succés !<br/>";
					   
					   $resultat4 = $execution4 -> fetchall();
					   echo '<pre>';
							print_r($resultat4);
					   echo '</pre>';
					   
					   // si l'on veut ajouter toute les ocurrences(les redondances), il suffit juste d'ajouter le mots ALL sur UNION comme suit
					   
					   		  $requette5 = "
					      SELECT nom FROM inscrits
						  UNION ALL
						  SELECT commentaire FROM commentaires
					   ";
					   	   $execution5 = $connexion ->prepare($requette5);
					   $execution5 -> execute();
					   echo "Jointure 5 établie avec succés !<br/>";
					   
					   $resultat5 = $execution5 -> fetchall();
					   echo '<pre>';
							print_r($resultat5);
					   echo '</pre>';
					   // enfin, pour simuler l'effet de full outer join, on va donc faire une union entre un left join et un right join, comme suit:
					   
					   					   $requette6 = "
					      SELECT inscrits.nom, commentaires.commentaire
						  FROM inscrits LEFT JOIN commentaires
						  ON inscrits.id = commentaires.id_inscrit
						  
						  UNION ALL
						  
						  SELECT inscrits.nom, commentaires.commentaire
						  FROM inscrits RIGHT JOIN commentaires
						  ON inscrits.id = commentaires.id_inscrit
						  WHERE inscrits.id is NULL
					   ";
					   // le where de la fin permet de preciser qu'on ne veut que les commentaires lié a un auteur dont l'id est null
					   	   $execution6 = $connexion ->prepare($requette6);
					   $execution6 -> execute();
					   echo "Jointure 6 établie avec succés !<br/>";
					   
					   $resultat6 = $execution6 -> fetchall();
					   echo '<pre>';
							print_r($resultat6);
					   echo '</pre>';
					   
					   
			}
			catch(PDOException $e){
				echo "Echec : ".$e->getMessage();	
			}
		
	
			 
     ?>
  </body>
 </html>