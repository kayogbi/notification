<?php
 require __DIR__ .'/../Lib-ex/autoload.php';

use notification\Email;

$novoEmail = new Email(2,'mail.guanambiweb.com.br','contato@guanambiweb.com.br','30248612','tsl','587','contato@guanambiweb.com.br','Guanambiweb');
$novoEmail->sendmail('Assunto teste','esta mensagem é teste','contato@guanambiweb.com.br','Guanambiweb','kayoalvestj.gbi@gmail.com','kayo Alves');

