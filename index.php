<?php
 require __DIR__ .'/Lib-ex/autoload.php';

use notification\Email;

$novoEmail = new Email;
$novoEmail->sendmail('Assunto teste','esta mensagem é teste','contato@guanambiweb.com.br','Guanambiweb','kayoalvestj.gbi@gmail.com','kayo Alves');

