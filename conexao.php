<?php
// conexao com o banco de dados systemlogin
$usuario = 'root';
$senha = '';
$database = 'systemlogin';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha na conexão com o banco de dados: " . $mysqli->error);
}