<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
	// FONCTIONS PHP AFFECTANT LES TABLEAUX
	
	// la fonction array_keys retourne les clefs d'un tableau dans un nouveau tableau
	$voitures = array(
	                      'Citroen' => 'DS3',
						  'Renault' => 'Clio',
						  'Peugeot' => '306',
						  'Peugeot2' => 306);
						echo '<pre>';
					print_r(array_keys($voitures));
					    echo '</pre>';
								
					
    // la fonction array_values retourne les valeurs d'un tableau sans les clefs dans un nouveau tableau	
    $loisirs = array(
                          'Sport' => 'Trail',
						  'Voyage' => 'Ecosse',
						  'Musique' => 'Guitare'
	);	echo '<pre>';
	     print_r(array_values($loisirs));
		 echo '</pre>';
		 
	// la fonction array_key_exists permet de verifier si une clef existe et renvois true si la clef est presente et false dans le cas contraire. NB: il est sensible a la casse
	$enseignement= array(
	                      'Math' => 'LOPEZ',
						  'Info' => 'BICE',
						  'Physique' => 'TAKEGNI'
	);
	   if(array_key_exists('physique',$enseignement)){
		   echo ' la clef existe'.'<br/>';
	   }
	   else{
		   echo 'la clef n\'existe pas'.'<br/>';
	   }
	   
	   
	   //la fonction array_search permet de rechercher une valeur dans un tableau et retourner la clef qui lui est associé
	   if(array_search('LOPEZ' and 'BICE',$enseignement)){
		   echo 'L\'element rechercher existe'.'<br/>';
	   }
	   else{
		   echo 'L\'element rehercher n\'existe pas'.'<br/>';
	   };
	   
	   //la fonction in_array va rechercher une valeur dans un tableau et renvoyer true si l'element est present et false si l'element est absent
	   $prenoms= array('pierre', 'paul', 'jacque');
	   if(in_array('pierre',$prenoms)){
		   echo 'present'.'<br/>';
	   }
	   else{
		   echo 'absent'.'<br/>';
	   }

		?>

	</body>
 </html>