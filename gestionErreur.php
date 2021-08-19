<!DOCTYPE html>
 <html>
   <head>
      <title> GESTION DES ERREURS ET EXCEPTIONS  </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
		// GESTION D'ERREURS: la fonction die permet d'arreter le script et envoyer un message d'erreur
	/*	
    if(!file_exists("jjj.txt")){
	die("fichier non present");
	}
	else{
		echo "fichier trouvé<br/>";
		$fichier = fopen("jjj.txt", "r+");
		while(!feof($fichier)){
			echo fgets($fichier);
		}
	}
	*/
	  // LA GESTION DES EXCEPTIONS
	  
	   function division($x,$y){
		   if($y==0){
			   throw new Exception("division par zero impossible");
		   }
		   return $x/$y;
	   }
	   
	   try{
		   echo division(2,4).'<br/>';
		   echo division(2,0).'<br/>';
	   }
	   catch(Exception $e){
		   echo "Echec : ".$e->getMessage(); 
	   }
	 ?>
  </body>
 </html>