<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
    // FONCTIONS PERMETTANT DE FORMATER DES DATES
	
	/*  d: represente un jour du mois( de 01 a 31)
	    m: represente un mois(de 01 a 12)
	    n: represente un mois(de 1 a 12)
		Y(y_majuscule): represente l'annee( par exemple: 2021)
		l: represente le jour de la semaine( ex: jeudi)
		N: represente un jour de la semaine, en chiffre(ex: jeudi = 4)
		H: represente les heure(de 00 a 23) format 24h
		h: represente les heures (de 00 a 12) format 12h
		i represente les minutes( de 00 a 59)
		s represente les secondes( de 00 a 59)
		NB: la casse a un grand role a jouer
	*/
	 echo date ('d/m/Y').'<br/>'; // affiche la date le mois et l'année
	 /* exemple d'affichage complet*/
	     echo 'Nous sommes le '.date('d-m-Y', ).'<br/>';
		 echo 'Aujourd\'hui c\'est '.date('l').'<br/>';
		 echo 'Il est '.date('H:i:s').'<br/>';
	
        $jour = array(
                        '',
                        'Lundi',
                        'Mardi',
                        'Mercredi',
						'Jeudi',
						'Vendredi',
						'Samedi',
						'Dimance');
		$mois = array(
                        '',
                        'Janvier',
						'Fevrier',
						'Mars',
						'Avril',
						'Mai',
						'Juin',
						'Juillet',
						'Aout',
						'Septembre',
						'Octobre',
						'Novembre',
						'Decembre'				
		);
                  echo '<br/><br/><br/><br/><br/><br/><br/><br/>';
				  echo 'Pour la date du jour en Francais, nous avons : <br/> Aujourd\'hui c\'est '.$jour[date('N')]; 
				  echo '<br/><br/><br/><br/><br/><br/><br/><br/>';
				  echo nl2br('Pour le mois de l\'année en Francais, nous avous: 
				             Nous somme en '.$mois[date('n')]);
							 
				   echo '<br/><br/><br/><br/><br/><br/><br/><br/>';
				   echo 'Nous sommes le '.$jour[date('N')].', '.date('d ').$mois[date('n')].' '.date('Y').'<br/>';
				   
	// AUTRE FACON D'AFFICHER
	
	               setlocale(LC_TIME, 'fr_FR');
				   echo 'Nous sommes le '.strftime('%A %d %B %Y').'<br/>'; // qui ne fonctionne pas et je ne sais pas encore pour quoi

    // la fonction checkdate permet de tester si une date est valide ou pas		
				   $date1 = checkdate(12,31,2021); // le premier argument c'est le mois, le deuxieme c'est le jour et le troisieme c'est l'année
				   $date2 = checkdate(13,31,2021);
				   $date3 = checkdate(01,25,-2021);
				  	
				   if($date1){
					   echo ' La date est valide ! <br/>';
				   }
				   else{
				       echo 'La date n\'est pas valide <br/>';
				   }	
                   
                   if($date2){
					   echo'la date est valide ! <br/>';
				   }
				   else{
				       echo 'La date n\'est pas valide <br/>';
				   }	
                   if($date3){
					   echo'la date est valide ! <br/>';
				   }
				   else{
				       echo 'La date n\'est pas valide <br/>';
				   }				    
				 
	// la fonction getdate permet de d'afficher la toutes les informations consernant la dates.
	                    echo'<pre>';
	                 print_r(getdate());
					    echo'</pre>'.'<br/><br/>';

	                    echo'<pre>';
	                 print_r(getdate(1));
					    echo'</pre>';

							 
                  						
		 
 		?>

	</body>
 </html>