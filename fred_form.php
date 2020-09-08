<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gomes e Alvaro Consultoria @2020</title>
</head>
<?
    $nome = $_POST[nome];
    $telefone = $_POST[telefone];
    $email = $_POST[email];
    $subject = "Mensagem online";
    $mensagem = $_POST[mensagem];
    $meu_email = $_POST[meu_email];

  $mensagemx = ("Nome do cliente: $nome  \r\n
  Telefone do cliente: $telefone  \r\n

    Mensagem do cliente: $mensagem  \r\n");

    $recipiente = $meu_email;

    $headers = "MIME-Version: 1.0 ";
    $headers .= "Content-Type: text/html; charset=utf-8\n";
    $headers .= "From: $email ";
   
    if(mail($recipiente, $subject, $mensagemx, $headers)){
        echo "<center><br>
                         Sua mensagem foi enviada com sucesso!  <br>
                   Em breve um de nossos consultores entrará em contato! <br><br><br>   ";
    }else{
        echo "Erro!!!";  }
 ?>
<body>
</body>
</html>