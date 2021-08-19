<!DOCTYPE html>
 <html>
   <head>
      <title>FONCTION SQL V2 </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // ->les fonction d'agrega
		// NB: la fonction AVG signifie AVERAGE(MOYENNE) et permet de calculer la moyenne
		// NB: la fonction COUNT PERMET DE CONTER LE NOMBRE D'ENREGISTREMENT
		// NB: les fonction max et min permettent de retourner le maximum et le minimum
		// NB: c'est net comme a excel
		
		$login = "root";
		$serveur = "localhost";
		$pass = "";
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2;charset=utf8", $login, $pass);
				$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connexion réussie ! <br/>";
				    
                       $requette = "SELECT AVG(age) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
					   
					   $requette1 = "SELECT COUNT(*) FROM inscrits";

					   $execution1 = $connexion ->prepare($requette1);
					   $execution1 -> execute();
				 	  
					   $resultat1 = $execution1 -> fetchall();
					   echo '<pre>';
							print_r($resultat1);
					   echo '</pre>';

                       $requette = "SELECT MAX(age) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
					   
					      $requette = "SELECT MIN(age) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
					   
					     $requette = "SELECT SUM(age) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';


   // -> les fonctions scalaires
     // les fonction ucase(uppercase) qui convertir un resultat en majuscul et LCASE(lowercase) qui converti un resultat en minuscule
                       $requette = "SELECT LCASE(prenom) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';


                       $requette = "SELECT UCASE(nom) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
 // LENGTH : permet de compter le nombre de caractère. s'il y'a l'accent, ca ne sera pas tres exact
                       $requette = "SELECT LENGTH(prenom) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
  // la fontion ROUND va permettre d'arrondir des valeurs par valeurs inferieur;
                       $requette = "SELECT ROUND(dons,1) FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
	// la fonction NOW permet de selectionner des choses avec la date precise de selection
	                      $requette = "SELECT prenom, NOW() FROM inscrits";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
					   echo '<pre>';
							print_r($resultat);
					   echo '</pre>';
	 
	 // quelques exemple de fonctions avancés.
	 // on va essayer de faire la moyenne des dons en fonction des ages.
	 
                      $requette = "SELECT AVG(dons),age FROM inscrits GROUP BY age";

					   $execution = $connexion ->prepare($requette);
					   $execution -> execute();
				 	  
					   $resultat = $execution -> fetchall();
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