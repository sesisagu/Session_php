<?php

require 'class/session/Session.php';

$session = new Session();

$session->prenom = 'Patrick';

$session->nom = 'Bertrand';

$session->age = 5;

var_dump(isset($session->attribut));

unset($session->age);

echo ($session->prenom);

var_dump($session);