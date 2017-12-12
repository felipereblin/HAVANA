<?php 
	//session_start(); 
	
	require_once "banco.php";
	//include "ajudantes.php";
	

       // $comentario_edit = $comentario_edit ? $comentario_edit :['nome'=>'','email'=>'','comentario'=>'','id'=>''];
	if(isset($_POST['nome']) && $_POST['nome'] != ''){
            if($_SESSION['wasEdited'] != '1'){
		$comentario = array();
		$comentario['nome'] = $_POST['nome'];
		
		if(isset($_POST['email'])){
				$comentario['email'] = $_POST['email'];
		}
		if(isset($_POST['comentario'])){
				$comentario['comentario'] = $_POST['comentario'];
		}
                
		gravar_comentario($conexao, $comentario);
            }
        }
        
        if(!isset($comentario_edit)){
            $comentario_edit['id'] = '';
            $comentario_edit['nome'] = '';
            $comentario_edit['email'] = '';
            $comentario_edit['comentario'] = '';
        }
        	
	$lista_comentario = buscar_comentario($conexao);
        
	include "detalhesProduto2.php";
?>
