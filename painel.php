<?php 

    include('protect.php');
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
            <li><a href="pecaonline.html" style="text-decoration:none;"><b>Peça On-line</b></a></li>
            <li><a href="cardapio.html" style="text-decoration:none;"><b>Cardápio</b></a></li>
            <li><a href="promocao.html" style="text-decoration:none;"><b>Promoção</b></a></li>
            <li><a href="Reserva.html" style="text-decoration:none;"><b>Reserva de Mesa</b></a></li>
          </ul>
  
          <div class="icon">
            <a href="painel.php"><img src="SRC/IMG/perfil.png" alt="Perfil" title="Perfil" width="40" height="40"></a>
          </div>
  
        </nav>
  
    </header>

    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
    
</body>
</html>