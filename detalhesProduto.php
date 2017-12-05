<?php 
	//session_start(); 
	
	include "banco.php";
	//include "ajudantes.php";
	

	if(isset($_GET['nome']) && $_GET['nome'] != ''){
		$comentario = array();
		$comentario['nome'] = $_GET['nome'];
		
		if(isset($_GET['email'])){
				$comentario['email'] = $_GET['email'];
		}
		if(isset($_GET['comentario'])){
				$comentario['comentario'] = $_GET['comentario'];
		}
                
		gravar_comentario($conexao, $comentario);		
	}

	
	
	$lista_comentario = buscar_comentario($conexao);
        
	
	include "detalhesProduto2.php";
?>
