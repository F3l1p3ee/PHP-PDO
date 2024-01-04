<?php 
// Informações usadas na instaciação do PDO
$dsn = "mysql:host=localhost;dbname=php_com_pdo";
$usuario = "root";
$senha = "";

try {
    // Instanciando a conexão ao PDO
    $conexao = new PDO($dsn, $usuario, $senha);
    $query = "
    create table if not exists tb_usuarios(
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar (100) not null,
        senha varchar(100) not null
    )
    ";

    $conexao->exec($query);

    $query = "
    delete from tb_usuarios
    ";

    $conexao->exec($query);

} catch(PDOException $e) {
    echo "Erro: " . $e->getCode() . " Mensagem: " . $e->getMessage();
}

?>