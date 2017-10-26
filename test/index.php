<?php
 require __DIR__ .'/../Lib-ex/autoload.php';

use notification\Email;


$novoEmail = new Email(2,'mail.host.com','user@mail.com','pass','(tsl / ssl) ','port(587)','user@mail.com.br','userNome');
$novoEmail->sendmail('Assunto','mensagem','Rem_email','Rem_nome','Des_email','Des_name');