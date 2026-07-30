<?php

session_start();

$host = "localhost";
$user = "root";
$db   = "projeto_de_algoritimos_ofc"; 
$pass = "";     

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['entrar'])) {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM clientes WHERE email = '$email' AND (nome = '$usuario' OR telefone = '$usuario')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['usuario_nome'] = $row['nome'];
            echo "<script>alert('Login realizado com sucesso!'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Senha incorreta.'); window.location.href='../paginas/login.html';</script>";
        }
    } 
    else {
        echo "<script>alert('Usuário ou email não encontrados.'); window.location.href='../paginas/login.html';</script>";
    }
}

$conn->close();
?>