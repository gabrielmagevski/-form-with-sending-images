<?php

/* Valores recebidos do formulário  */
// Informações Padrão
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$telefone = $_POST ["telefone"];
$empresa = $_POST ["empresa"];

$embalagem = $_POST ["embalagem"];
$observacoes = $_POST ["observacoes"];

$bolsa = $_POST ["bolsa"];
$bolsadesejada = $_POST ["bolsa-desejada"];

$espessuradesejada = $_POST ["espessura-desejada"];

$medidas = $_POST ["medidas"];
$medidadesejada = $_POST ["medida-desejada"];

$cordaalca = $_POST ["cor-da-alça"];

$reforco = $_POST ["reforço"];
$reforcodesejado = $_POST ["reforço-desejado"];

$sanfona = $_POST ["sanfona"];
$sanfonadesejada = $_POST ["sanfona-desejada"];


$valvuladodesejado = $_POST ["valvulado-desejado"];

$cor = $_POST ["cor"];
$outracor= $_POST ["outra-cor"];

$coresdaimpressao = $_POST ["cores-da-impressao"];

$tipodeimpressao = $_POST ["tipo-de-impressao"];

$sistemadeimpressao = $_POST ["sistema-de-impressao"];

$rebobinamento = $_POST ["rebobinamento"];

$materialdesejado = $_POST ["material-desejado"];

$pp = $_POST ["pp"];
$peabd = $_POST ["peabd"];
$pemd= $_POST ["pemd"];
$pebd = $_POST ["pebd"];


$laminacao = $_POST ["laminacao"];


$arquivo = $_FILES ["arquivo"];

$observacoesextras = $_POST ["observacoes-extras"];


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
$mail->Username = '*********@gmail.com';
$mail->Password = '*******';

// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array( 'tsl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
// $mail->SMTPDebug = 2;

// Define o remetente
// Seu e-mail
$mail->From = "********@***.com";


// Define o(s) destinatário(s)
$mail->AddAddress('*********', '(nome)');


// Opcional: mais de um destinatário
// $mail->AddAddress('************');

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana');
// $mail->AddBCC('roberto@gmail.com', 'Roberto');

// Definir se o e-mail é em formato HTML ou texto plano
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true);

// Charset (opcional)
$mail->CharSet = 'UTF-8';

// Assunto da mensagem
$mail->Subject = "Um novo contato do site - ";

// Corpo do email
$mail->Body =
'
<tr>
  <td width="784" valign="top" style="width:587.9pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
    <p></p>
    <p>&nbsp;</p>
    <p></p>
    <div align="center">
      <table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
        <tbody>
          <tr>
            <td width="299" valign="top" style="width:224.45pt;padding:0cm 5.4pt 0cm 5.4pt">
              <p><span style="mso-fareast-language:PT-BR"><img width="238" height="56" id="Imagem_x0020_2"
                    src="#"
                    alt="cid:image001.png@01D5D131.88FECBA0" class="preview-button-anexo"></span></p>
              <p></p>
              <p></p>
            </td>
            <td width="299" valign="top" style="width:224.45pt;padding:0cm 5.4pt 0cm 5.4pt">
              <p align="center" style="text-align:center"><span style="font-size:10.0pt">END<br>TEL – <a
                    href="#" target="_blank">****</a></span><span
                  style="font-size:10.0pt"></span></p>
              <p></p>
              <p></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <p></p>
    <p>&nbsp;</p>
    <p></p>
    <div align="center" style="text-align:center">
      <hr size="2" width="100%" align="center">
    </div>
    <div align="center">
      <table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
        <tbody>
          <tr>
            <td width="599" valign="top" style="width:448.9pt;border:solid #4F81BD 1.5pt;padding:0cm 5.4pt 0cm 5.4pt">
              <p><span style="font-size:8.0pt">PEDIDO ENVIADO VIA WEB </span><span style="font-size:8.0pt"></span></p>
              <p></p>
              <p></p>
            </td>
          </tr>
          <tr>
            <td width="599" valign="top"
              style="width:448.9pt;border:solid #4F81BD 1.5pt;border-top:none;background:white;padding:0cm 5.4pt 0cm 5.4pt">
              <p></p>
              <p>&nbsp;</p>
              <p></p>
              <p><b>CONTATO</b></p>
              <p></p>
              <p></p>
              <p>NOME: '.$nome.'
              <br>E-MAIL: '.$email.'
              <br>TELEFONE: '.$telefone.'
              <br>EMPRESA: '.$empresa.'
              <b></b>
              </p>
              <p></p>
              <p></p>
              <p></p>
              <p>&nbsp;</p>
              <p></p>
              <div align="center" style="text-align:center">
                <hr size="2" width="100%" align="center">
              </div>

              <p><b>TIPO DE EMBALAGEM:</b> '.$embalagem.' <br><strong>

              <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Observações:</span></strong>
              '.$observacoes.' <br><strong>

                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Bolsa:</span></strong> '.$bolsa.'

                <br><strong>
                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Bolsa
                    Desejada:</span></strong> '.$bolsadesejada.'

                <br><strong>
                 <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Espessura Desejada:</span></strong>
                 '.$espessuradesejada.'

                <br><strong>
                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Medidas:</span></strong>
               '.$medidas.'

                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Medidas
                    Desejadas:</span></strong> '.$medidadesejada.'

                <br><strong>
                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Cor Da Alça:</span></strong> '.$cordaalca.'
                <br>

                <strong>
                <span
                    style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Reforço:</span></strong> '.$reforco.'
                <br>

                <strong>
                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Reforço
                    Desejado:</span></strong> '.$reforcodesejado.'

                    <br><strong>
                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Sanfona:</span></strong> '.$sanfona.'
                <br>
                <strong>
                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Sanfona
                    opção:</span></strong> '.$sanfonadesejada.'

                     <br><strong><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Válvula:</span></strong> '.$valvuladodesejado.'
                <br>
                <strong>
                <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Cor de Fundo:</span></strong> '.$cor.' <br>

                    <strong><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Outra Cor:</span></strong>
                    '.$outracor.'
                    <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Cores Da
                    Impressão:</span></strong> '.$coresdaimpressao.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Tipo de Impressões:</span></strong>
                    '.$tipodeimpressao.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Sistema
                    de Impressões:</span></strong> '.$sistemadeimpressao.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Rebobinamento:</span></strong>
                    '.$rebobinamento.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Tipo de Material:</span></strong>
                    '.$pp.' '.$peabd.' '.$pemd.' '.$pebd.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Material Desejado:</span></strong>
                    '.$materialdesejado.' <br><strong>

                    <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Laminação:</span></strong>
                    '.$laminacao.' <br><strong>

              <p></p>
              <p></p>
              <div align="center" style="text-align:center">
                <hr size="2" width="100%" align="center">
              </div>
              <p style="margin-bottom:12.0pt"><span style="font-size:8.0pt"><br></span><strong>
              <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Arquivo Anexo:</span></strong>
              '.$arquivo['name'].' <br><strong>

              <span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Observações extras:</span></strong>
              '.$observacoesextras.' </p>

              <div align="center" style="margin-bottom:12.0pt;text-align:center">
                <hr size="2" width="100%" align="center">
              </div>

              <p><span style="font-size:8.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;color:#333333">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum   </span></p>

              <p></p>
              <p></p>
              <p></p>
              <p>&nbsp;</p>
              <p></p>
            </td>
          </tr>
          <tr>
            <td width="599" valign="top"
              style="width:448.9pt;border:solid #4F81BD 1.5pt;border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt">
              <p align="center" style="text-align:center"><i><span style="font-size:8.0pt"></span></i></p>
              <p><i>&nbsp;</i></p>
              <p></p>
              <p align="center" style="text-align:center"><i><span style="font-size:8.0pt">END<br>TEL – <a
                      href="#" target="_blank">LOREM IPSUM LOREM IPSUM</a></span></i></p>
              <p></p>
              <p></p>
              <p align="center" style="text-align:center"><span style="font-size:8.0pt"></span></p>
              <p>&nbsp;</p>
              <p></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <p></p>
    <p>&nbsp;</p>
    <p></p>
    <div align="center" style="text-align:center">
      <hr size="2" width="100%" align="center">
    </div>
    <p></p>
    <p>&nbsp;</p>
    <p></p>
  </td>
</tr>
';

$mail->addAttachment($arquivo['tmp_name'], $arquivo['name']);

// Envia o e-mail
$enviado = $mail->Send();

// Exibe uma mensagem de resultado
if ($enviado)
{
  echo "<script>alert('Sua mensagem foi enviada com sucesso!');window.location='http://magnatech.ind.br/';</script>";
} else {
  echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}


?>