<html>
<title>Alumne agregat</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<body>
	
	<?php
	
	include('Aula_class.php');
	include('Alumne_class.php');
	
	$nom_c=$_POST['nom'];
	
	$fp = fopen("usuaris.txt","r");
	$file_name = "usuaris.txt";
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
				$fa = fopen("Aules.txt","r+");
				$aules_llegides= fread($fa, filesize("Aules.txt"));
				$aules_llegides= unserialize($aules_llegides);
				$fp=fclose($fp);
				
				foreach ($aules_llegides as $ac) {
						
						if($ac->getNumero() == $_POST['aula'] ) {
							
							$aula_mod=$ac;		
							var_dump($aula_mod);					
							$ocupacio= $aula_mod -> getOcupacio();
							$capacitat= $aula_mod -> getCapacitat();
							$assignat = $obj->getAula();
							
							if($ocupacio<$capacitat && !$assignat) {
							
								$aula_mod-> afegirAlumne($alumne_mod);
								$aula_mod -> setOcupacio();
								$fa = fopen("Aules.txt","w+");
								$aules_llegides= serialize($aules_llegides);
								fwrite($fa, $aules_llegides);		
								$fa=fclose($fa);
								var_dump($aula_mod);
								$fp = fopen("usuaris.txt","w+");
								$file_name = "usuaris.txt";
								$obj->setAula();
								$contenido= serialize($contenido);
								fwrite($fp, $contenido);		
								$fp=fclose($fp);
								echo("Alumne afegit correctament. Redireccionant al menú principal.");
							
							}						
						
							else echo "No es pot assignar l'alumne. Revisa l'ocupació de l'aula o si l'alumne ja està assignat. Redireccionant al menú principal.";
						}
						
						else echo "No hi ha aules amb aquest número. Redireccionant al menú principal.";
																
				}
				
			}				
		}

	}
	
	//header("refresh:5; url=index.html");
	?>
	</body>
</html>	
