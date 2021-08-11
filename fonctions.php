<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
	// FONCTION PERMETTANT DE TRIER  ET COMBINER DES TABLEAUX
	
	// la fonction array_merge permet de combiner plusieurs tableaux en un nouveau
	   $alpha = array('a','b');
	   $beta = array('c', 'd');
	       $omega=array_merge($alpha,$beta);
		   echo '<pre>';
		   print_r($omega);
   		   echo '<pre>';

    // la fonction array_combine permet de creer un tableaux associatif en combinant 02 tableaux numérotés. NB: les deux tableaux doivent avoir le meme nombre d'elemets. on aura donc que les valeurs du premier tableaux vont servir de clefs au elements du deuxieme tableaux
		  $lamda=array_combine($alpha,$beta); 
		  	echo '<pre>';
            print_r($lamda);
            echo '</pre>';		

    // la fonction array_unique permet de supprimer les doublonts d'un tableaux conservant ainsi uniquement la premiere valeur NB: il est sensible a la casse		
		$prenoms = array('4',4,'pierre', 'paul', 'ierre', 'jacque'); // il est a remarquer que dans ce cas, il n'y'a pas de difference entre la chaine de caractere "4" et l'entier 4
            $redond=array_unique($prenoms);
            print_r($redond);	
			
    // la fonction sort permet d'ordonner les valeurs d'un tableaux numeroté != associatif allant du plus petit au plus grand son contraire est la fonction rsort. NB: il detruit le tableaux initial pour l'ordonner
	      $eleves = array('pierre', 'antoine', 'jean');
		  sort($eleves); // classe les elements du tableaux eleve dans l'ordre croissant
		  print_r($eleves);
        	
		  rsort($eleves); // classe les elements du tableaux eleve dans l'ordre decroissant
          print_r($eleves);		  
	
	// la fonctioon ksort permet de classer les elements d'un tableaux associatif dans l'ordre croissant par rapport a ses clefs. sont contraire est krsort
	 $agenom = array(
	         'pierre' => 24,
			 'paul' => 27,
			 'jean' =>34
	 );
	 ksort($agenom); // classe les elements par ordre croissant des clefs
	 print_r($agenom);
	 
	 krsort($agenom); // classe les elements par ordre decroissant des clefs
	 print_r($agenom);
	
	// la fonction asort permet de classer un tableaux associatif selon ses valeurs dans l'ordre croissant, son contraire est arsort;
	    asort($agenom); // classe les element par ordre croissant des valeurs
		print_r($agenom);
		
		arsort($agenom); // classe les elements par ordre decroissant selon valeurs
		print_r($agenom);
	 
 		?>

	</body>
 </html>