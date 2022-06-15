<html>
<head>
	<title>Primeiro site em PHP</title>
	
	<style>
		h1{
			color: blue;
			text-align: center;
		}
	</style>
</head>

<body>

	<?php
		print("<h1>" . "Contagem de Linhas" . "</h1>");
		print("<p>" . "Primeiro site utilizando o PHP. Com a estrutura de repetição for, 
				fiz uma contagem de linhas de 1 a 10: " . "</p>");
		for($i = 0; $i < 10; $i++){
			print("Linha número " . $i+1 . "<br>");
		}
	?>
</body>
</html>