<?php

include "banco.php";

remover_comentario($conexao, $_GET['id']);

header('Location: detalhesProduto.php');
