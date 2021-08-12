<!DOCTYPE html>
 <html>
     <head>
	      <title>LES CONSTANTES EN PHP</title>
		  <meta charset = "utf-8" />
	 </head>
	<body>
	  <?php
	        define('Bienvenue',"Bienvenue sur mon site"); // declaration de la constante "Bienvenue ayant pour valeur "Bienvenue dans mon site".
            echo Bienvenue.'<br/>';	
            $a = 'bonjour';		
            define('nombre', 4);
        function porte(){
			echo nombre.'<br/>';
			$b=36;
			echo $b.'<br/>';
		}	
         function por(){
			 $b=37;
			 echo $b.'<br/>';
		 }		
		porte();
		por();
		
		// quelques constantes magiques, qui changent de valeur selon l'utilisation
		// la constante "__FILE__" va contenir le chemin complet et le nom du fichier dans lequel elle va etre placer
		// la constante "__DIR__" va contenir le nom du dossier dans lequel est le fichier.
		// la constante "__FUNCTION__" va contenir le nom de la fonction dans constante est utilisé
		// la constante "__LINE__" va indiquer le numero actuelle de la ligne du fichier a laquelle cette constate est appelé
		// la constante "__CLASS__"
		// la constante "__METHOD__"
		// la constante "__NAMESPACE__"
		
		echo 'ligne'.__LINE__ .'<br/>';
	  
	   function TEST(){
		   echo 'la fonction est appelé dans la fonction '. __FUNCTION__ .'<br/>';
	   }
	    TEST();
	   
	   echo __FILE__ .'<br/>';
	   echo __DIR__ .'<br/>';
	  ?>
	</body>
 </html>