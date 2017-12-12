<?php

require_once "banco.php";

if (isset($_POST['id']) && $_POST['id'] != '') {
    $comentario = array();

    $comentario['id'] = $_POST['id'];

    $comentario['nome'] = $_POST['nome'];

    if (isset($_POST['email']) && $_POST['email'] != '') {
        $comentario['email'] = $_POST['email'];
    } else {
        $comentario['email'] = '';
    }

    if (isset($_POST['comentario']) && $_POST['comentario'] != '') {
        $comentario['comentario'] = $_POST['comentario'];
    } else {
        $comentario['comentario'] = '';
    }
 
    editar_comentario($conexao, $comentario);
    $_SESSION['wasEdited'] = '1';
}
else {
    $comentario_edit = buscar_comentario_byID($conexao, $_GET['id']);  
}
include "detalhesProduto.php";
