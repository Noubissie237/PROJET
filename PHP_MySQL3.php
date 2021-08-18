<!DOCTYPE html>
 <html>
   <head>
      <title> OPERATION SUR LES BD </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // ici, nous allons appprendrre a recuperer des données a partir d'une base de données
	    $pass = "";
		$serveur = "localhost";
		$login = "root";
		
		try{
			
			$connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connexion réussi ! <br/>";
			
			$requette = $connexion -> prepare("ALTER TABLE visiteurs ADD Age INT(2)");
			   $requette -> execute();
				echo "reussi";
			
                $requette = $connexion -> prepare("SELECT * FROM visiteurs");
				    $requette -> execute();
					echo "Sélection réussie<br/>";
			    	
					$resultat = $requette -> fetchall(); // recuperation des données dans la BD
					echo '<pre>';
					   print_r($resultat); // affichage des données récupérés;
					echo '</pre>';
					
					
					// on va essayer de ne selectionner que les prenoms
					
			$requette1 = $connexion -> prepare("SELECT Prenom FROM visiteurs ");
			$requette1 -> execute();
			  echo "premiere selection reussie ! <br/>";
			  
			  $resultat1 = $requette1 -> fetchall();
			  	 echo '<pre>';
				   print_r($resultat1);
			  	 echo '</pre>'; 
				 
				 // on va selectionner uniquement les prenoms masculin
			
			$requette2 = $connexion -> prepare("SELECT Prenom FROM visiteurs WHERE Sexe = 'M' ");
			$requette2 -> execute();
			 echo "deuxieme selection reussie ! <br/>";
			 
			   $resultat2 = $requette2 -> fetchall();
			 			  	 echo '<pre>';
				                print_r($resultat2);
			  	             echo '</pre>';
							 
				// on va selectionner tous les prenoms des visiteurs par age croissant
				
			$requette3 = $connexion -> prepare("SELECT Prenom FROM visiteurs ORDER BY Age ASC ");
			$requette3 -> execute();
			    echo " troisieme selection reussie ! <br/>";
				$resultat3 = $requette3 -> fetchall();
							  	 echo '<pre>';
				                    print_r($resultat3);
			  	                 echo '</pre>';
								 
				// on va selectionner tous les prenoms des visiteurs par age decroissant
				
			$requette4 = $connexion -> prepare("SELECT Prenom FROM visiteurs ORDER BY Age DESC ");
			$requette4 -> execute();
			    echo " quatrieme selection reussie ! <br/>";
				$resultat4 = $requette4 -> fetchall();
							  	 echo '<pre>';
				                    print_r($resultat4);
			  	                 echo '</pre>';

                // on veut selectionner trois prenoms a partir de la premiere entrer qui porte le numero 0.
				
			$requette5 = $connexion -> prepare("SELECT Prenom FROM visiteurs LIMIT 0,3"); // 0 pour la premiere entré et 3 pour le nombre qu'on veut selectionner.
			$requette5 -> execute();
			    echo " cinquieme selection reussie ! <br/>";
				$resultat5 = $requette5 -> fetchall();
							  	 echo '<pre>';
				                    print_r($resultat5);
			  	                 echo '</pre>';
								 
								 
					
					
					
					
            

		}	
		catch(PDOException $e){
			echo "Echec : ".$e->getMessage();
		}
	 ?>
  </body>
 </html>