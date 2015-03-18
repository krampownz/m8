<html>
<head>
	
	<title>Alumne Creat</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">

</head>
<body>

<?php
	
	include('Alumne_class.php');
	
	$fp = fopen("usuaris.txt","r");
	$file_name = "usuaris.txt";
	$contenido= array();
	$contenido= fread($fp, filesize($file_name));
		
	if (!$contenido) {
		$contenido= array();
		$alumne= new Alumne($_POST['nom'],$_POST['cognom'],$_POST['nif'],$_POST['correu']);
		array_push($contenido, $alumne);
		//var_dump($contenido);
		$fp=fclose($fp);
		$fp = fopen("usuaris.txt","w+");
		$contenido= serialize($contenido);
		fwrite($fp, $contenido);	
		$fp=fclose($fp);
		echo("Usuari creat correctament. Redireccionant al menú principal.");
		
	}
	
	else {
		
		$contenido= unserialize($contenido);
		//var_dump($contenido);
		$fp=fclose($fp);	
		$fp = fopen("usuaris.txt","w+");		
		$alumne= new Alumne($_POST['nom'],$_POST['cognom'],$_POST['nif'],$_POST['correu']);	
		array_push($contenido, $alumne);
		//var_dump($contenido);
		$contenido= serialize($contenido);
		fwrite($fp, $contenido);	
		$fp=fclose($fp);
		echo("Usuari creat correctament. Redireccionant al menú principal.");
	}
		header("refresh:5; url=index.html");
	?>
</body>
</html>
