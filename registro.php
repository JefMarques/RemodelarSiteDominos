<?php 
include('conexao.php');

/* Class cadastro {

public function cadastrar($nome, $telefone, $email, $senha){

    global $mysqli;

    $sql = $mysqli->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
    $sql->bind_param(":e",$email);
    $sql->execute();
    if($sql->num_rows() > 0){
           //num_rows
        return false; //email ja cadastrado
    }
    else {

        $sql = $mysqli->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
        $sql->bind_param(":n",$nome);
        $sql->bind_param(":t",$telefone);
        $sql->bind_param(":e",$email);
        $sql->bind_param(":s",md5($senha));
        $sql->execute();

        return true;

    }
}
}

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $telefone = $mysqli->real_escape_string($_POST['telefone']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $confirmarSenha = $mysqli->real_escape_string($_POST['confSenha']);
*/
if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){

        if($senha = $confirmarSenha){

            $sql = $mysqli->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bind_param(":e",$email);
            $sql->execute();
            if($sql->num_rows() > 0){
                   //num_rows
                return false; //email ja cadastrado
            }
            else {
        
                $sql = $mysqli->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $sql->bind_param(":n",$nome);
                $sql->bind_param(":t",$telefone);
                $sql->bind_param(":e",$email);
                $sql->bind_param(":s",md5($senha));
                $sql->execute();
        
                return true;
                }
        }       
        else {
        echo "senha e confirmar senha não correspondem!";
        }

     
        //$sql_code = "INSERT INTO usuarios2 values (nome='$nome', telefone='$telefone', email='$email', senha='$senha') ";
        //$sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

} else {
    echo "Preencha todos os campos";
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
            <a href="login.php"><img src="SRC/IMG/perfil.png" alt="Perfil" title="Perfil" width="40" height="40"></a>
            <a href="http://"><img src="SRC/IMG/carrinho.png" alt="Carrinho" title="Carrinho" width="50" height="40"></a>
          </div>
  
        </nav>
  
    </header>

    <main class="login">

        <h1> Cadastre-se no nosso Site</h1>
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
                <label>Nome Completo</label>
                    <input type="text" class="input-padrao" id="nome" name="nome" maxlength="50">
            </p>
            <p>
                <label>Telefone</label>
                    <input type="text" class="input-padrao" id="telefone" name="telefone" maxlength="11">
            </p>
            <p>
                <label>E-Mail</label>
                    <input type="text" class="input-padrao" id="email" name="email" maxlength="40">
            </p>
            <p>
                <label>Senha</label>
                    <input type="password" class="input-padrao" id="password" name="senha" maxlength="20">
            </p>
            <p>
                <label>Confirmar Senha</label>
                    <input type="password" class="input-padrao" id="password" name="confSenha" maxlength="20">
            </p>
            <p>
                <input class="register" type="submit" value="Registre-se">
            </p>
        </form>

        

    </main>

</body>
</html>