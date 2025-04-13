<?php
// lendo arquivos CSV com php 
$nomeArquivo = 'users.csv';
function lerCsv($nomeArquivo)
{

  $users = [];
  // verificar se o arquivo existe
  if (file_exists($nomeArquivo)) {
    // abrir o arquivo para leitura
    $arquivo = fopen($nomeArquivo, 'r');
    // verificar se o arquivo foi aberto com sucesso
    if ($arquivo) {
      // percorrer os dados e escrever no arquivo
      while (($linha = fgetcsv($arquivo, 0, ";")) !== false) {
        $users[] = $linha;
      }
      // fechar o arquivo
      fclose($arquivo);
    } else {
      echo "Erro ao abrir o arquivo!\n";
    }
  } else {
    echo "Arquivo não encontrado, verifique o caminho digitado...\n";
  }

  return $users;
};

$dadosLidos = lerCsv($nomeArquivo);

if (count($dadosLidos) > 0) {
  echo "Dados encontrados!\n";
  foreach ($dadosLidos as $dados) {
    echo implode(' , ' ,$dados) ."\n";
  }
} else {
  echo "Nao encontramos dados nenhum! \n";
}
