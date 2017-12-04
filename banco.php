<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'havana';

$conexao = mysqli_connect(
				$bdServidor, 
				$bdUsuario, 
				$bdSenha, 
				$bdBanco);

if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

function buscar_contato($conexao)
{
	$sqlBusca = 'SELECT * FROM contato';
	$resultado = mysqli_query($conexao, $sqlBusca);

	$contatos = array();
	
	while($contato = mysqli_fetch_assoc($resultado)){
		$contatos[] = $contato;
	}
	
	return $contatos;
}

function gravar_contato($conexao, $contato){
		$sqlGravar = "
			INSERT INTO 
				contato(nome, email, telefone, mensagem)	
			VALUES('{$contato['nome']}',
					'{$contato['email']}',
					'{$contato['telefone']}',
					'{$contato['mensagem']}'
					)";
					
		mysqli_query($conexao,$sqlGravar);
}






?>