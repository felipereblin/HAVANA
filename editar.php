<?php

include "banco.php";

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $comentario = array();

    $comentario['id'] = $_GET['id'];

    $comentario['nome'] = $_GET['nome'];

    if (isset($_GET['email']) && $_GET['email'] != '') {
        $comentario['email'] = $_GET['email'];
    } else {
        $comentario['email'] = '';
    }

    if (isset($_GET['comentario']) && $_GET['comentario'] != '') {
        $comentario['comentario'] = $_GET['comentario'];
    } else {
        $comentario['comentario'] = '';
    }
    
    buscar_comentario_byID($conexao, $id);  
    editar_comentario($conexao, $comentario);
    header('Location: detalhesProduto.php');
    die();
}

$comentario = buscar_comentario($conexao);

include "detalhesProduto.php";
