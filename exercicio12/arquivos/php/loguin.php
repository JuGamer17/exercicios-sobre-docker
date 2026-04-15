<?php

    $host = 'db'; // Nome do serviço no docker-compose
    $db   = 'senhas';
    $user = 'root';
    $pass = 'senhamuitosegura'; // A senha que você definiu no environment
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


    try{
        $pdo = new PDO($dsn, $user, $pass);
    }catch(\PDOException $e){
        echo("erro ao conectar: " . $e->getMessage());
    }


    $user = $_POST["user"];
    $senha = $_POST["senha"];

    $request = "SELECT * FROM loguins WHERE nome = :user AND senha = :senha";
    $stmt = $pdo->prepare($request);
    $stmt->execute(['user' => $user, 'senha' => $senha]);

    $corret = $stmt->fetch();

    if($corret){
        echo("senha e usuario correto!!!");
    }else{
        header("Location: /html/index.html?erro=1");
    }



?>