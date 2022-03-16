<?php

if (isset($_POST['email'] && !empty $_POST['email']) {
 $nome = addslashes ($_POST['nomeme']);
 $email = addslashes ($_POST['email']);
 $telefone = addslashes($_POST['telefone']);
 $mensagem  = addslashes($_POST['mensagem']);
 
}
 $to = "gabrielsantorocha@hotmail.com";
 $subjet = "Contato - Email ART";
 $body = "nome: ".$nome. "\n".
         "Email:  ".$email. "\n".
		 "mensagem: ".$mensagem; 

$header = "from:valdir@artvison.com.br" ."\r\n". "Reply-to:".$email."\r\n".
			x=mailer:PHP/.phpversion();
			
if(mail($to,$subjet,$body,$header)){
	echo (" Email enviado com sucesso")
	
}
else { 
	echo("O email nao pode ser enviado");
	


?>