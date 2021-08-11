<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
	// FONCTIONS PERMETTANT DE COMPTER ET COMPARER LES TABLEAUX
	
	//la fonction count permet de compter le nombre d'elements d'un tableau
	       $sport=array('football','rugbi','natation');
		   echo 'Le tableau sport comporte '.count($sport).' elements'.'<br/>';
	//la fonction array_count_values permet de compter le nombre de fois que l'on a entré chaque valeur du tableau
            $nombres = array(0,1,2,3,4,5,6,7,8,9,10,18,22,18,25,44,85,2,14,5,22,);
			echo'<pre>';
	        print_r(array_count_values($nombres));
			echo'</pre>';
			
	//la fonction array_diff_assoc permet de comparer les clefs et les valeurs de plusieurs tableau et renvoie les differences(ie les clefs et elements qu'il ya dans le premier tableau et absent dans le second tableau  sont renvoyees.NB: les indices doivent exactement correspondre aux valeurs pour pouvoir etre consideré com identique
	        $compare= array(
			                  'a' => 'bleu',
							  'b' => 'vert',
							  'c' => 'jaune',
							  'd' => 'rose');
			$comparant= array(
			                  'a' => 'jaune',
							  'b' => 'vert',
                              'c' => 'bleu'
			);
			echo '<pre>';
					print_r(array_diff_assoc($compare,$comparant));
			echo '<pre>';
    // la fonction array_diff permet de la comparaison sur plusieurs tableau uniquement sur les valeur sans tenir compte des indices.
	       	echo '<pre>';
					print_r(array_diff($compare,$comparant));
			echo '<pre>';
	// la fonction array_intersect_assoc permet de similitudes entre differents tableaux
				       	echo '<pre>';
					print_r(array_intersect_assoc($compare,$comparant));
			           echo '<pre>';
	// la fonction array_intersect_key permet de comparer les clefs uniquement et renvoyer celle qui sont identiques
	              		 echo '<pre>';
					print_r(array_intersect_key($compare,$comparant));
			           echo '<pre>';
	// la fonction array_intersect permet de faire la comparaison uniquement sur les valeur
			       	   echo '<pre>';
					print_r(array_intersect($compare,$comparant));
			           echo '<pre>';
 		?>

	</body>
 </html>