<?php 
	//session_start(); 
	
	include "banco.php";
	//include "ajudantes.php";
	

	if(isset($_GET['nome']) && $_GET['nome'] != ''){
		$contato = array();
		$contato['nome'] = $_GET['nome'];
		
		if(isset($_GET['email'])){
				$contato['email'] = $_GET['email'];
		}
		if(isset($_GET['telefone'])){
				$contato['telefone'] = $_GET['telefone'];
		}
		if(isset($_GET['mensagem'])){
				$contato['mensagem'] = $_GET['mensagem'];
		}
		
		//gravar_contato($conexao, $contato);		
	}

	
	
	//$lista_contato = buscar_contato($conexao);
	
	include "detalhesProduto.php";
?>
