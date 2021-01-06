<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class PagamentoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_pagamento){
		include("conexao.php");
		$sql = 'SELECT * FROM pagamento WHERE id_pagamento = :id_pagamento';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_pagamento",$id_pagamento);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pagamento';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pagamento ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_pagamento){
		include("conexao.php");
		$sql = 'DELETE FROM pagamento WHERE id_pagamento = :id_pagamento';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_pagamento",$id_pagamento);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($pagamento){
		include("conexao.php");
		$sql = 'INSERT INTO pagamento (id_pagamento, reg_data_pagamento, situacao, data_alteracao, data_cadastro, id_usuario) VALUES (:id_pagamento, :reg_data_pagamento, :situacao, :data_alteracao, :data_cadastro, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_pagamento',$pagamento->getId_pagamento()); 
		$consulta->bindValue(':reg_data_pagamento',$pagamento->getReg_data_pagamento()); 
		$consulta->bindValue(':situacao',$pagamento->getSituacao()); 
		$consulta->bindValue(':data_alteracao',$pagamento->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$pagamento->getData_cadastro()); 
		$consulta->bindValue(':id_usuario',$pagamento->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($pagamento){
		include("conexao.php");
		$sql = 'UPDATE pagamento SET id_pagamento = :id_pagamento, reg_data_pagamento = :reg_data_pagamento, situacao = :situacao, data_alteracao = :data_alteracao, data_cadastro = :data_cadastro, id_usuario = :id_usuario WHERE id_pagamento = :id_pagamento';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_pagamento',$pagamento->getId_pagamento()); 
		$consulta->bindValue(':reg_data_pagamento',$pagamento->getReg_data_pagamento()); 
		$consulta->bindValue(':situacao',$pagamento->getSituacao()); 
		$consulta->bindValue(':data_alteracao',$pagamento->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$pagamento->getData_cadastro()); 
		$consulta->bindValue(':id_usuario',$pagamento->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pagamento';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>