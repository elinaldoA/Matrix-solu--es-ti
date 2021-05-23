<?php

	$para="elinaldoagostinho@outlook.com";
	$assunto="Contato pelo site";

	$nome= $_POST['nome'];
	$assunto= $_POST['assunto'];
	$email= $_POST['email'];
	$mensagem= $_POST['mensagem'];

	echo $assunto."<br>";
	echo $nome."<br>";
	echo $email."<br>";
	echo $mensagem."<br>";

	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $nome";
	$corpo.= "<br><strong>Assunto: </strong> $assunto";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Mensagem: </strong> $mensagem";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Replay-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);

	header("location:index.php?$mensagem=enviado");

?>