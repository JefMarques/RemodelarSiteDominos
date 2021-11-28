<?php
include('conexao.php');
// Verificacao se existe a variável email ou senha
if(isset($_POST['email']) || isset($_POST['senha'])) {
    //verificar se o email ou senha foi preenchido em branco
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        // Limpar esses dados dentro do campo no banco de dados evitando sql injection
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        // Verificar se o email e senha existe no banco de dados
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execuxao do código SQL: " . $mysqli->error);
        //consulta de quantas linhas a query retornou
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            // inicio da sessao
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            // redireciona para o painel de login do usuario
            header("Location: painel.php");

        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }       
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="DOMINO’S-LOGO.png">
    <title>  | Domino's</title>
    <link rel="stylesheet" href="style.css">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
</head>

<body style="background-color: #303030;">

    <header class="header-container">

        <nav class="head">
          
          <div class="logo">
            <a href="index.html"><img src="SRC/IMG/DOMINO’S-LOGO.png" ></a>
          </div>
  
          <ul class="nav-list">
            <li><a href="http://" style="text-decoration:none;"><b>Peça On-line</b></a></li>
            <li><a href="cardapio.html" style="text-decoration:none;"><b>Cardápio</b></a></li>
            <li><a href="http://" style="text-decoration:none;"><b>Promoção</b></a></li>
            <li><a href="Reserva.html" style="text-decoration:none;"><b>Reserva de Mesa</b></a></li>
          </ul>
  
          <div class="icon">
            <a href="login.html"><img src="SRC/IMG/perfil.png" alt="Perfil" title="Perfil" width="40" height="40"></a>
            <a href="http://"><img src="SRC/IMG/carrinho.png" alt="Carrinho" title="Carrinho" width="50" height="40"></a>
          </div>
  
        </nav>
  
    </header>

    <main class="login">

        <h1>Faça Login</h1>
        <div class="social-midia">
            <a href="#">
                <img src="SRC/IMG/facebook.png" alt="Facebook" title="Facebook"/></a>

            <a href="#">
                <img src="SRC/IMG/google.png" alt="google" title="Google" /></a>
        </div>

        <div class="or">
            <span>OR</span>
        </div>

        <div class="barra">
            <span></span>
        </div>

        <form action="" method="POST">
            <p>
                <label>E-Mail</label>
                    <input type="text" class="input-padrao" id="email" name="email" placeholder="exemplo@gmail.com">
            </p>
            <p>
                <label>Senha</label>
                    <input type="password" class="input-padrao" id="password" name="senha" placeholder="senha">
                </label>
            </p>
            <p>
                <input class="register" type="submit" value="Login">
            </p>
            <a href="registro.php">Não possui cadastro? Crie sua conta aqui
        </form>

        

    </main>
    

    

</body>
</html>