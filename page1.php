<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
		       // INTRODUCTION LES FONCTIONS
			   echo strlen("bonjour a tous").'<br/>';//compte le nombre de caractere contenu dans une  phrase.  
			   echo str_word_count("bonjour à tous").'<br/>';//compte le nombre de mot dans une phrase. 
			   echo str_word_count("bonjour a tous").'<br/>';// idem mais avec un caractere compté en moins car il y'a pas d'accent sur "a".
			   echo str_repeat('bonjour <br/>',7); //permet de repeter une chaine de caractere un nombre definie de fois
			   $texte = 'bonjour comMent allez vous?';
			   echo str_ireplace('bonjour','bonsoir',$texte,$i).'<br/>';//permet de remplacer un mot par un autre. NB: str_replace est sencible a la casse or str_ireplace ne l'est pas.
			   echo 'nombre de remplacement: '.$i.'<br/>';
			   echo strtolower($texte).'<br/>';//mettre en minuscule
			   echo strtoupper($texte).'<br/>';// mettre en majuscule
			   echo strpos("bonjour","o").'<br/>';//recherche la lettre o dans le mot bonjour
			   echo strpos("bonjour","e").'<br/>';//idem
			   echo strpos('bonjour à tous ','tous').'<br/>';//recherche le mot tous et renovie la position de la premiere lettre
                    $str = 'j\'aime le <strong> "PHP" </strong>';
			   echo htmlspecialchars($str).'<br/>';// permet de ne pas considierer les balises html et de les hafficher;
			   echo nl2br('bonjour!
				comment ca va?').'<br/>';// NB: nl2br parmet de rentrer a la ligne sans <br/>
				

		?>

	</body>
 </html>