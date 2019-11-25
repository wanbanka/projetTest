<?php

$login = $_POST['nom'];
$mdp = $_POST['mdp'];

imap_open($login."@gmail.com", $login, $mdp);
imap_createmailbox();
mailparse_msg_parse($mimemail, $message);

?>