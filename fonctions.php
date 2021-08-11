<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
	 // INTRODUCTION LES FONCTIONS
			   
			   
	//compte le nombre de caractere contenu dans une  phrase.  
	
	        $nom1=strlen('Noubisiie');
			echo '"Noubissie" compte '.$nom1.' caractères'.'<br/>';
			
			    
	//compte le nombre de mot dans une phrase. 
			$nom2=str_word_count('Salut à vous, je m\'appelle Noubissie wilfried');
			echo 'Dans la phrase "Salut à vous, je m\'appelle Noubissie wilfried", il y\'a en tout '.$nom2.' mots'.'<br/>';
			   
	//permet de repeter une chaine de caractere un nombre definie de fois
	        echo str_repeat('Salut',2).'<br/>';
			   
	//permet de remplacer un mot par un autre. NB: str_replace est sencible a la casse or str_ireplace ne l'est pas.
	        $phrase = 'Bonjour à vous, comment allez vous?';
			echo str_ireplace('bonjour','Salut',$phrase).'<br/>';
			
	//mettre en minuscule
	        echo strtolower('Bonjour comment vous appelez vous?').'<br/>';
			
	// mettre en majuscule
			echo strtoupper('salut moi c\'est Noubissie wilfried').'<br/>';

   //recherche la lettre o dans le mot bonjour
			$nom3= strpos('Noubissie','o');
            echo 'Dans le nom "Noubissie", la lettre "o" se trouve à la position numero '.$nom3.'<br/>';
			
	//recherche le mot tous et renovie la position de la premiere lettre
	        echo 'Le nom "Noubissie" se trouve à la position numero '.strpos ('Salut à vous, moi c\'est Noubissie wilfried','Noubissie').'<br/>';
			
    // permet de ne pas considierer les balises html et de les hafficher;
	        $html = 'Ceci est un affichage des balises html à l\'exemple de la balise <body></body> qui permet de contenir le corps du html';
	        echo htmlspecialchars($html) .'<br/>';
			
	// NB: nl2br parmet de rentrer a la ligne sans <br/>
	        $saut= 'Ceci permet de faire un saut de ligne en appuis simplement sur "entrer" comme suit:
			La je viens de faire un saut de ligne';
			echo nl2br($saut);
			   
				

		?>

	</body>
 </html>