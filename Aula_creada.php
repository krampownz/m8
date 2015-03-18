<head>
	
	<title>Aula Creada</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">

</head>
<body>


<?php
	
		include('Aula_class.php');
		
		$fp = fopen("Aules.txt","r");
		$file_name = "Aules.txt";
		$contenido= array();
	
		$contenido= fread($fp, filesize($file_name));
	
		if (!$contenido) {
			$contenido= array();
			$aula= new Aula($_POST['numero'],$_POST['capacitat'],$_POST['pc']);
			array_push($contenido, $aula);
			$fp=fclose($fp);
			$fp = fopen("Aules.txt","w+");
			$contenido= serialize($contenido);
			fwrite($fp, $contenido);	
			$fp=fclose($fp);
			echo("Aula creada correctament. Redireccionant al menú principal.");
			
		
		}
	
		else {
		
			$contenido= unserialize($contenido);
			$fp=fclose($fp);	
			$fp = fopen("Aules.txt","w+");		
			$aula= new Aula($_POST['numero'],$_POST['capacitat'],$_POST['pc']);
			array_push($contenido, $aula);
			$contenido= serialize($contenido);
			fwrite($fp, $contenido);	
			$fp=fclose($fp);
			
			echo("Aula creada correctament. Redireccionant al menú principal.");
		
		}
		
		header("refresh:5; url=index.html");
?>
</body>	
		