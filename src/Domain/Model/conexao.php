<?php

//usar sempre o caminho absoluto segundo a documentacao
$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:'.$caminhoBanco);

echo 'conectei';