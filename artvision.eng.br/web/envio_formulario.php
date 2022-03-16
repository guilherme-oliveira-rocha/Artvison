<html>	
<head>	
	<title></title>
	</head>
	
	<body>
	
	<?php
	$corpo =	"
		nome:	"		.$_POST['nome']."
		email:	"		.$_POST['email']."	
		telefone:	"	.$_POST['telefone']."
		mensagem:	"	.$_POST['mensagem']."
";

mail('sergio.rocha@artvison.com.br',$corpo, 'From: guilherme.oliveira2344@gmail.com');
echo 'Seus dados foram enviados com sucesso';
?> 














