<?php 
// Informações usadas na instaciação do PDO
$dsn = "mysql:host=localhost;dbname=php_com_pdo";
$usuario = "root";
$senha = "";

try {
// Instanciando a conexão ao PDO
    $conexao = new PDO($dsn, $usuario, $senha);
    $query = "
    select * from tb_usuarios
    ";

// Obtendo um PDOStatement com o script que foi enviado do PHP para o PDO
    $stmt = $conexao->query($query);

// Executando o comando fetchAll() para ter o retorno da query e armazená-la numa variável para poder ser acessada
    $retornos = $stmt->fetch(PDO::FETCH_ASSOC); // Com PDO::FETCH_ASSOC podemos ter apenas o retorno do índices associativos (nomes das colunas da tabela)

    print_r($retornos);
    // echo "<pre>";
    // print_r($retornos);
    // echo "</pre>";

    // foreach($retornos as $retorno){
    //     echo "Seja muito bem-vindo " . $retorno["nome"] . "<hr>";
    // }

} catch(PDOException $e) {
    echo "Erro: " . $e->getCode() . " Mensagem: " . $e->getMessage();
}

?>