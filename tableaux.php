<!DOCTYPE html>
 <html>
         <head>
		       <title>MON PROJET PHP</title>
			   <meta charset="utf-8" />
		 </head>
	<body>
	    <?php
                 

				 echo'######################################<br/>';
				
		      // DECLARATION DES TABLEAUX 1
			  
               $personnes = array('noubissie', 'kamga', 'wilfried');
			   
			   //AFFICHAGE
			   
			   foreach($personnes as $first){
				   echo $first.' ';
			   }
			   // AFFICHAGE DU PREMIER TABLEAUX
			   echo'<pre>';
			       print_r($personnes);
			   echo'</pre>';
			   
			   //DECLARATION DES TABLEAUX 
			   
			   $personness[0]='wifried';
			   $personness[1]='kamga';
			   $personness[2]='noubissie';
			   
			   // AFFICHAGE
			   echo '<br/>';
			   
			   foreach($personness as $second){
				   echo $second.' ';
			   }
			   // AFFICHAGE DU DEUXIEME TABLEAUX
			   echo'<pre>';
			    print_r($personness);
			   echo'</pres>';
			   
			   // DECLARATION DE TABLEAUX ET CORRESPONDANCE
			   
			   $age = array(
			       'wilfried' => 21,
				   'leo' => 21,
				   'noel' => 19);
				   
				// AFFICHAGE DES AGES
				
				echo '<br/>';
				foreach($age as $trois){
					echo $trois.', ';
				}
				// AFFICHAGE DU TROISIEME TABLEAUX
				echo'<pre>';
				   print_r($age);
				echo'</pre>';
				
				// AFFICHAGE DES AGES EN FONCTION DES PERSONNES
				echo '<br/>';
				foreach($age as $personne => $correspondance){
					echo $personne.' a '.$correspondance.' ans.<br/>';
				}
				// AFFICHAGE DU DERNIER TABLEAUX
				  echo'<pre>';
				    print_r($age);
				  echo'</pre>';
				  // CALCUL DES VALEURS DU TABLEAUX
				  $val = 0;
				$valeur = array(1, 2, 3, 4, 5);
				foreach($valeur as $somme){
					 $val = $val + $somme;
				}
				echo 'La somme des valeur du tableau est egal a '.$val.'<br/>';
				
				echo'#############################################<br/><br/>';
				
				//LES TABLEAU BI_DIMENSIONNELLE
			// DECLARATION	
		 $membres = array(
		            array('Noubissie', 21, 'melen'),
					array('Manfo', 21, 'sapin_bar'),
					array('Noel', 19, 'melen'));
		    // AFFICHAGE
			
		for($i=0;$i<3;$i++){
			$num = $i+1;
			echo 'Membre numero '.$num.'<br/>';
			for($j=0;$j<3;$j++){
				echo '<ul>';
				    echo '<li>';
					   echo $membres[$i][$j];
					echo '</li>';
				echo '</ul>';
			}
		}
		echo'<br/>';
		echo'<br/>';
		echo'<br/>';
		echo $membres[0][0].' a '.$membres[0][1].' ans et il habite a '.$membres[0][2].'.<br/>';
		echo $membres[1][0].' a '.$membres[1][1].' ans et il habite a '.$membres[1][2].'.<br/>';
		echo $membres[2][0].' a '.$membres[2][1].' ans et il habite a '.$membres[2][2].'.<br/>';
		
		
        // AFFICHAGE DU TABLEAU
               echo '<pre>';
			     print_r($membres);
               echo '</pre>';	   
		?>
	</body>
 </html>