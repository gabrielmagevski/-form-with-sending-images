<?php   

/* Valores recebidos do formulário  */
$embalagem = $_POST ["embalagem"];
$observacoes = $_POST ["observacoes"];
$bolsa = $_POST ["bolsa"];
$medidas = $_POST ["medidas"];
$sanfona = $_POST ["sanfona"];
$reforço = $_POST ["reforço"];
$cor = $_POST ["cor"];
$coresdaimpressao = $_POST ["cores-da-impressao"];
$impressao = $_POST ["impressao"];
$arquivo = $_FILES ["arquivo"];
$titulo = $_POST ["titulo"];


// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "phpmailer/PHPMailerAutoload.php"; 

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = "smtp.gmail.com"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587;

$mail->SMTPSecure = 'tsl';   


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = '******@gmail.com'; 
$mail->Password = '*****'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'tsl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = "******@gmail.com"; 


// Define o(s) destinatário(s) 
$mail->AddAddress('*******@gmail.com', 'nome'); 

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = "Um novo contato do site - ".$titulo; 

// Corpo do email 
$mail->Body = 
'
<br>
NOVO CONTATO DO SITE!
<br><br>
(http://com.br/)
<br><br>
Seguem abaixo as informações do orçamento:
<br><br>
--------------------------------------------
<br>
<br><strong>Tipo de Embalagem:</strong> '.$embalagem.'
<br><strong>Observações:</strong> '.$observacoes.'
<br><strong>Bolsa:</strong> '.$bolsa.'
<br><strong>Medidas:</strong> '.$medidas.'
<br><strong>Sanfona:</strong> '.$sanfona.'
<br><strong>Reforço:</strong> '.$reforço.'
<br><strong>Cor de Fundo:</strong> '.$cor.'
<br><strong>Cores Da Impressão:</strong> '.$coresdaimpressao.'
<br><strong>Tipo de Impressões:</strong> '.$impressao.'
<br><br><strong>Arquivo Anexo:</strong> '.$arquivo['name'].'
<br>
<br>
--------------------------------------------
';

$mail->addAttachment($arquivo['tmp_name'], $arquivo['name']);

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
  echo "<script>alert('Sua mensagem foi enviada com sucesso!');window.location='http://com.br/';</script>";
} else { 
  echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


?>