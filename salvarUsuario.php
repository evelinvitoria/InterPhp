<?php 
switch ($_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $POST["nome"];
		$email = $POST["email"];
		$data_nasc = $POST["data_nasc"];

		$sql = "INSERT INTO usuario (nome, email, senha, data_nasc) VALUES( '{$nome}', '{email}', '{senha}', '{data_nasc'};
		)
				break;

				$res = $conn->query($sql);	
	case 'editar':// faltando terminar
	break;

	case 'excluir'
	break;
}
