<html>
<title>Cerca</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<body>
	
	<?php
	
	include('Aula_class.php');
	include('professor_class.php');
	include('Alumne_class.php');
	
	$alumne=$_POST['alumne'];
	$profe=$_POST['professor'];
	$aula=$_POST['ocupacio'];
	
	$flag=1;
	
	//var_dump($alumne, $aula, $profe);
	
	if($alumne) {
		
		$fp = fopen("usuaris.txt","r");
		$file_name = "usuaris.txt";
		$contenido= fread($fp, filesize($file_name));
		
		if (!$contenido) {
			echo 'No hi ha alumnes.Redireccionant al menú principal. ';	
			$fp=fclose($fp);
		
		}
		
		else {
			
			$contenido= unserialize($contenido);
			
			foreach ($contenido as $obj) {
			
				if($obj->getNom() == $alumne){
				
					$alumne_mod=$obj;
					$alumne_mod=$alumne_mod -> toString();
					echo $alumne_mod;
					$fp=fclose($fp);
					$flag=0;
		
				}
			}
			
			if($flag) echo "No s'han trobat camps. Redireccionant.";
		}
	}
			
	else if($profe) {
		
		$fp = fopen("profes.txt","r");
		$file_name = "profes.txt";
		$contenido= fread($fp, filesize($file_name));
		
		if (!$contenido) {
			echo 'No hi ha professors.Redireccionant al menú principal.';	
			$fp=fclose($fp);
		
		}
		
		else {
			
			$contenido= unserialize($contenido);
			
			foreach ($contenido as $obj) {
			
				if($obj->getNom() == $profe){
				
					$alumne_mod=$obj;
					$alumne_mod=$alumne_mod -> toString();
					echo $alumne_mod;
					$fp=fclose($fp);
					$flag=0;
		
				}
			}
			
			if($flag) echo "No s'han trobat camps. Redireccionant.";
		}
	}
	
	
	/*else if($aula) {
		
		$fp=fopen("Aules.txt","r");
		$file_name = "Aules.txt";
		$contenido= fread($fp, filesize($file_name));
		
		if (!$contenido) {
			echo 'No hi ha professors.Redireccionant al menú principal.';	
			$fp=fclose($fp);
		
		}
		
		else {
			
			$contenido= unserialize($contenido);
			$fp=fclose($fp);
			
			foreach ($contenido as $obj) {
			
				if($obj->getNumero() == $aula){
				
					$aula_mod=$obj;
					
					$array_alumnes= $aula_mod->getAlumnes();
					//var_dump($aula_mod);
					
					foreach ($array_alumnes as $dni_ocu) {
					
						
		$fp=fopen("usuaris.txt","r");
		$file_name = "usuaris.txt";
		$contenido= fread($fp, filesize($file_name));
		
		foreach($contenido as $alumnes) {
				
				$dni_cerca=$alumnes -> getDni();
				
				if($dni_cerca == $dni_ocu) {
					
					$alumnes= $alumnes -> toString();
					echo $alumnes;					
					
				}
		
									
					
					}
					
					/*$alumne_mod=$alumne_mod -> toString();
					echo $alumne_mod;
					$fp=fclose($fp);
					$flag=0;
		
				}
			}
		}
	}*/
	
	else if($flag) echo "No s'han entrat camps. Redireccionant.";
		
	header("refresh:5; url=index.html");
	?>
	</body>
</html>	
