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

function buscar_comentario($conexao)
{
	$sqlBusca = 'SELECT * FROM comentario';
	$resultado = mysqli_query($conexao, $sqlBusca);

	$comentarios = array();
	
	while($comentario = mysqli_fetch_assoc($resultado)){
		$comentarios[] = $comentario;
	}
	
	return $comentarios;
}

function buscar_comentario_byID($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM comentario WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
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

function gravar_comentario($conexao, $comentario){
		$sqlGravar = "
			INSERT INTO 
				comentario(nome, email, comentario)	
			VALUES('{$comentario['nome']}',
                               '{$comentario['email']}',
                                   '{$comentario['comentario']}'
					)";
					
		mysqli_query($conexao,$sqlGravar);
}

function remover_comentario($conexao, $id)
{
    $sqlRemover = "DELETE FROM comentario WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}

function editar_comentario($conexao, $comentario)
{
    $sqlEditar = "
        UPDATE comentario SET
            nome = '{$comentario['nome']}',
            email = '{$comentario['email']}',
            comentario = '{$comentario['comentario']}'
        WHERE id = {$comentario['id']}
    ";
    mysqli_query($conexao, $sqlEditar);
}

?>