<html>
<title>Professor agregat</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<body>
	
	<?php
	
	include('Aula_class.php');
	include('professor_class.php');
	
	$nom_c=$_POST['nom'];
	
	$fp = fopen("profes.txt","r");
	$file_name = "profes.txt";
	$contenido= fread($fp, filesize($file_name));
		
	if (!$contenido) {
		echo 'No hi ha alumnes.Redireccionant al menú principal. ';	
		$fp=fclose($fp);
		
	}
	
	else {
		
	
		$contenido= unserialize($contenido);
		$fp=fclose($fp);
		
		foreach ($contenido as $obj) {
			
			if($obj->getNom() == $nom_c){
				
				$alumne_mod=$obj;
				$alumne_mod=$alumne_mod ->getDni();
				$fp = fopen("Aules.txt","r+");
				$aules_llegides= fread($fp, filesize("Aules.txt"));
				$aules_llegides= unserialize($aules_llegides);
				$fp=fclose($fp);
				
				foreach ($aules_llegides as $ac) {
						
						if($ac->getNumero() == $_POST['aula'] ) {
							
							$aula_mod=$ac;
							$aula_mod-> afegirProfessor($alumne_mod);
							$fp = fopen("Aules.txt","w+");
							$aules_llegides= serialize($aules_llegides);
							fwrite($fp, $aules_llegides);		
							$fp=fclose($fp);
							echo("Professor afegit correctament. Redireccionant al menú principal.");
												
						}
						
						else echo "No hi ha aules amb aquest número. Redireccionant al menú principal.";
						
											
				}
				
			}				
		}

	}
	
	header("refresh:5; url=index.html");
	?>
	</body>
</html>	