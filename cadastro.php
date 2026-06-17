<?php
    $host = "localhost";
    $user = "root";
    $dbname = "projeto_de_algoritimos_ofc";
    $pass = "";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $nome = $_POST['nome'];
    $email = $_POST['gmail'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
    $telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : '';

    $sql = "INSERT INTO clientes (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $senha, $telefone);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.html';</script>";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
?>