<!DOCTYPE html>
 <html>
   <head>
      <title> FICHIERS</title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 /*  r: ouvre un fichier en lecture seule. pas de modification possible
		 r+: ouvre un fichier en lecture et en ecriture;
		 a: ouvre un fichier en ecriture seule. si le fichier n'existe pas, en crée un nouveau;
		 a+: ouvre un fichier en lecture et en ecriture. si le fichier n'existe pas, en crée un nouveau
		 w: ouvre un fichier en ecriture seule. si le fichier existe deja, supprime le contenu préexistant. si il n'existe pas, en crée un nouveau;
		 w+: ouvre un fichier en lecture et en ecriture. si le fichier existe deja, supprime le contenu préexistant. si il n'existe pas, en crée un nouveau;
		 x: crée un nouveau fichier ouvert en ecriture seulement. Retourne la valeur FALSE si le fichier existe deja
		 x+: crée un nouveau fichier ouvert en lecture et en ecriture. Retourne la valeur FALSE si le fichier existe deja
	 */
	  $fp = fopen("fichier-inclus.php", "r+");
	// $affichagedefichier = fread($fp, 1000);
	 //echo $affichagedefichier;
	 // une autre facon est:
	 
	     while(!feof($fp)){
			 echo fgets($fp);
		 }
	  
	  fclose($fp);
	 ?>
  </body>
 </html>