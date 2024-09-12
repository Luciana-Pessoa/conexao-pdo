<?php

//usar sempre o caminho absoluto segundo a documentacao
$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:'.$caminhoBanco);

echo 'conectei';

//cria a tabela atraves do sqlite
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, nome TEXT, birth_date TEXT);');