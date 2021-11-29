<?php 

include('conexao.php');

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $telefone = $mysqli->real_escape_string($_POST['telefone']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string(md5($_POST['senha']));
    $confSenha = $mysqli->real_escape_string(md5($_POST['confSenha']));

// Verificacao se existe as variáveis
if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){

    $sql_code = "SELECT count(*) as total FROM usuarios2 WHERE nome = '$nome'";
    $sql_query = $mysqli->query($sql_code);
    $row = mysqli_fetch_assoc($sql_query);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = true;
        header('Location: registro.html');
        exit;
    }       
    $sql = "INSERT INTO usuarios2 (nome, telefone, email, senha) 
    VALUES ('$nome', '$telefone', '$email', '$senha')";
    
    if(mysqli_query($mysqli, $sql)){
        echo "Usuário cadastrado com sucesso";
    } else {
        echo "Erro" .mysqli_connect_error($mysqli);
        }
    mysqli_close($mysqli);
    header('Location: login.php');
} else {
    ?>
    <div class= "msg-erro">
        Preencha todos os campos!
    </div>
    <?php
    
}


/*$nome = $_POST['nome'];
$telefone =  $_POST['telefone'];
$email =  $_POST['email'];
$senha =  $_POST['senha'];
$confSenha =  $_POST['confSenha'];*/


// Código que funciona
/* 
include('conexao.php');

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $telefone = $mysqli->real_escape_string($_POST['telefone']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string(md5($_POST['senha']));
    $confSenha = $mysqli->real_escape_string(md5($_POST['confSenha']));

    $sql_code = "SELECT count(*) as total FROM usuarios2 WHERE nome = '$nome'";
    $sql_query = $mysqli->query($sql_code);
    $row = mysqli_fetch_assoc($sql_query);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = true;
        header('Location: registro.html');
        exit;
        }
    }       
    $sql = "INSERT INTO usuarios2 (nome, telefone, email, senha) 
    VALUES ('$nome', '$telefone', '$email', '$senha')";
    
    if(mysqli_query($mysqli, $sql)){
        echo "Usuário cadastrado com sucesso";
    } else {
        echo "Erro" .mysqli_connect_error($mysqli);
        }
    mysqli_close($mysqli);
    header('Location: login.php')
    */
?>