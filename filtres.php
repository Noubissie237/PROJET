<!DOCTYPE html>
 <html>
   <head>
      <title>LES FILTRES</title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // les filtres vont permettre de filtrer les données soit en les validant soit en les nettoyant.	 
	 ?>
	
	 <table border = 1>
        <tr> <th>Nom_filtre </th></tr>
			<?php
				$filtres = filter_list();
				
				foreach($filtres as $nom){
					echo "<tr><td>".$nom."</td></tr>";
				}
			?>
			</table>
			<!-- LE BLOC DE COMMANDE CI DESSUS PERMET D'AFFICHER LES DIFFERENT FILTRES EXISTANTS-->
			
			<?php
				// la fonction filter var vas nous permettre d'appliquer un filtre a une variable precise.
				// appliquons le filtres sur l'email.
				
				$mail1 = "noubissiewilfried2017gmail.com";
				$mail2 = "noubissiewilfried2017@mail.com";
				$mail3 = "noubissiewilfried2017@gmail,com";
				$mail4 = "noubissiewilfried2017@gmail.kamga";
				$mail5 = "noubissiewilfried2017@gmail.com";
				
					if(!filter_var($mail1, FILTER_VALIDATE_EMAIL)==false){
						echo "l'email ".$mail1." est correcte<br/>";
					}
					else{
						echo "l'email ".$mail1." est invalide<br/>";
					}
					
					
					if(!filter_var($mail2, FILTER_VALIDATE_EMAIL)==false){
						echo "l'email ".$mail2." est correcte<br/>";
					}
					else{
						echo "l'email ".$mail2." est invalide<br/>";
					}
					
					if(!filter_var($mail3, FILTER_VALIDATE_EMAIL)==false){
						echo "l'email ".$mail3." est correcte<br/>";
					}
					else{
						echo "l'email ".$mail3." est invalide<br/>";
					}
					
					if(!filter_var($mail4, FILTER_VALIDATE_EMAIL)==false){
						echo "l'email ".$mail4." est correcte<br/>";
					}
					else{
						echo "l'email ".$mail4." est invalide<br/>";
					}
					
					if(!filter_var($mail5, FILTER_VALIDATE_EMAIL)==false){
						echo "l'email ".$mail5." est correcte<br/>";
					}
					else{
						echo "l'email ".$mail5." est invalide<br/>";
					}
				// appliquons le filtre sur des entiers naturels
				
				$nombre1 = 0;
				$nombre2 = 'aaa';
				$nombre3 = -10;
				$nombre4 = 12.3;
				$nombre5 = '12a';
				$nombre6 = '12';
				
				if(filter_var($nombre1, FILTER_VALIDATE_INT) OR $nombre1==0){ // car 0 n'est pas reconnu comme etant un entier
					echo "Valeur ".$nombre1." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre1." incorrecte, veuillez entrer un entier naturel<br/>";
				}
				
				if(filter_var($nombre2, FILTER_VALIDATE_INT OR $nombre1==0)){
					echo "Valeur ".$nombre2." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre2." incorrecte, veuillez entrer un entier naturel<br/>";
				}
				
				if(filter_var($nombre3, FILTER_VALIDATE_INT OR $nombre1==0)){
					echo "Valeur ".$nombre3." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre3." incorrecte, veuillez entrer un entier naturel<br/>";
				}
				
				if(filter_var($nombre4, FILTER_VALIDATE_INT OR $nombre1==0)){
					echo "Valeur ".$nombre4." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre4." incorrecte, veuillez entrer un entier naturel<br/>";
				}
				
				if(filter_var($nombre5, FILTER_VALIDATE_INT OR $nombre1==0)){
					echo "Valeur ".$nombre5." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre5." incorrecte, veuillez entrer un entier naturel<br/>";
				}
				
				if(filter_var($nombre6, FILTER_VALIDATE_INT OR $nombre1==0)){
					echo "Valeur ".$nombre6." correcte<br/>";
				}
				else{
					echo "Valeur ".$nombre6." incorrecte, veuillez entrer un entier naturel<br/>";
				}
								
					// maintenant nous allons appliquer un nettoyage. 
					// pour cella, il suffit juste d'utiliser un FILTER_SANITIZE_.. a la place de FILTER_VALIDATE_..
					// essayons par exemple de nettoyer quelques adresses mail
					echo "<br/>1<br/>";
				$mail6="n/o\u(bissie)wilfried@gmailcom";
				$mailcorr = filter_var($mail6, FILTER_SANITIZE_EMAIL);
				
				if ($mail6 != $mailcorr){
					if (filter_var($mailcorr, FILTER_VALIDATE_EMAIL)){
						echo " l'email ".$mail6." a été corrigé en ".$mailcorr." et est correcte<br/>";
					}else{
						echo "l'email ".$mail6." a été corrigé en ".$mailcorr." mais n'est toujours pas correcte, veillez verifier votre email";
					}
				}else{
					if(filter_var($mail6, FILTER_VALIDATE_EMAIL)){
						echo "l'email ".$mail6." est correcte<br>";
					}else{
						echo "l'email ".$mail6." est incorrect<br/>";
					}
				}
				echo "<br/>2<br/>";
				$mail7="n/o\u(bissie)wilfriedgmail.com";
				$mailcorr = filter_var($mail7, FILTER_SANITIZE_EMAIL);
				
				if ($mail7 != $mailcorr){
					if (filter_var($mailcorr, FILTER_VALIDATE_EMAIL)){
						echo " l'email ".$mail7." a été corrigé en ".$mailcorr." et est correcte<br/>";
					}else{
						echo "l'email ".$mail7." a été corrigé en ".$mailcorr." mais n'est toujours pas correcte, veillez verifier votre email";
					}
				}else{
					if(filter_var($mail7, FILTER_VALIDATE_EMAIL)){
						echo "l'email ".$mail7." est correcte<br>";
					}else{
						echo "l'email ".$mail7." est incorrect<br/>";
					}
				}
				echo "<br/>3<br/>";
				$mail8="n/o\u(bissie)wilfried@gmail";
				$mailcorr = filter_var($mail8, FILTER_SANITIZE_EMAIL);
				
				if ($mail8 != $mailcorr){
					if (filter_var($mailcorr, FILTER_VALIDATE_EMAIL)){
						echo " l'email ".$mail8." a été corrigé en ".$mailcorr." et est correcte<br/>";
					}else{
						echo "l'email ".$mail8." a été corrigé en ".$mailcorr." mais n'est toujours pas correcte, veillez verifier votre email";
					}
				}else{
					if(filter_var($mail8, FILTER_VALIDATE_EMAIL)){
						echo "l'email ".$mail8." est correcte<br>";
					}else{
						echo "l'email ".$mail8." est incorrect<br/>";
					}
				}
				echo "<br/>4<br/>";
				$mail9="noubissiewilfried@.com";
				$mailcorr = filter_var($mail9, FILTER_SANITIZE_EMAIL);
				
				if ($mail9 != $mailcorr){
					if (filter_var($mailcorr, FILTER_VALIDATE_EMAIL)){
						echo " l'email ".$mail9." a été corrigé en ".$mailcorr." et est correcte<br/>";
					}else{
						echo "l'email ".$mail9." a été corrigé en ".$mailcorr." mais n'est toujours pas correcte, veillez verifier votre email";
					}
				}else{
					if(filter_var($mail9, FILTER_VALIDATE_EMAIL)){
						echo "l'email ".$mail9." est correcte<br>";
					}else{
						echo "l'email ".$mail9." est incorrect<br/>";
					}
				}
				echo "<br/>5<br/>";
				$mail10="n/o\u(bissie)wilfried@gmail.com";
				$mailcorr = filter_var($mail10, FILTER_SANITIZE_EMAIL);
				
				if ($mail10 != $mailcorr){
					if (filter_var($mailcorr, FILTER_VALIDATE_EMAIL)){
						echo " l'email ".$mail10." a été corrigé en ".$mailcorr." et est correcte<br/>";
					}else{
						echo "l'email ".$mail10." a été corrigé en ".$mailcorr." mais n'est toujours pas correcte, veillez verifier votre email";
					}
				}else{
					if(filter_var($mail10, FILTER_VALIDATE_EMAIL)){
						echo "l'email ".$mail10." est correcte<br>";
					}else{
						echo "l'email ".$mail10." est incorrect<br/>";
					}
				}
				
				// NB: le processus est exactement le meme pour l'url, les entiers, et autres.
					
			?>
	 
  </body>
 </html>