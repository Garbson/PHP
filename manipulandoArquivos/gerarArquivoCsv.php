<?php
// Trabalhando com manipulação de arquivos em PHP

function gerarArquivoCsv($nomeArquivo, $users)
{
  // verificar se os dados existem
  if (count($users) > 0) {
    // abrir o arquivo para escrita
    $arquivo = fopen($nomeArquivo, 'w');

    // verificar se o arquivo foi aberto com sucesso
    if ($arquivo) {
      // percorrer os dados e escrever no arquivo
      foreach ($users as $user) {
        fputcsv($arquivo, $user, ";");
      }
      // fechar o arquivo
      fclose($arquivo);
      echo "Arquivo gerado com sucesso!<br>";
    } else {
      echo "Erro ao abrir o arquivo!<br>";
    }
  } else {
    echo "Array vazio!<br>";
  }
}

$users = [
  ["Nome", "Idade", "E-mail"],
  ["Garbson", "20", "garson@gmail.com"],
  ["Maria", "24", "maria@gmail.com"],
  ["Tiago", "40", "pedro@yahoo.com"],
  ["Gabriela", "21", "gabriela@gmail.com"],
];

$nomeArquivo = 'users.csv';

gerarArquivoCsv($nomeArquivo, $users);
