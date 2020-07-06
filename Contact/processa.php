<?php
if(isset ($_POST['name']) && !empty ($_POST['name']){
	and if ($_POST['phone']) && !empty ($_POST['phone'])){
	
$nome = addcslashes ($_POST['name'])
$nomeempresa = addcslashes ($_POST['enterprisename'])
$telefone = addcslashes ($_POST['phone'])
$email = addcslashes ($_POST['email'])
$mensagem = addcslashes ($_POST['message'])

$to = 'suporte@infinitussolutions.com.br';
$subject = 'PluzApp - Planos'
$body = "Nome: ".$nome."\r\n".
		"Nome da empresa: ".$nomeempresa."\r\n".
		"Telefone: ".$telefone. "\r\n".
		"E-mail: ".$email."\r\n".
		"Mensagem: ".$mensagem;
$header =  "From: marketing@infinitussolutions.com.br"."\r\n"."Replay-To: ".$email."\r\n"."X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header))
{
	echo("E-mail enviado com sucesso!");
	
}else{("E-mail não pode ser enviado.");

}
}

?>