<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class FinanceiroDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_financeiro){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM financeiro WHERE id_financeiro = :id_financeiro';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_financeiro",$id_financeiro);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM financeiro';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM financeiro ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_financeiro){
		include("../conexao/conexao.php");
		$sql = 'DELETE FROM financeiro WHERE id_financeiro = :id_financeiro';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_financeiro",$id_financeiro);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Cadastrar pela primeira vez do Form cadastrar_aluno.php
	public function cadastrar($financeiro){
		include("../conexao/conexao.php");
		$sql = 'INSERT INTO financeiro (preference_id, produto, preco, payment_status, data_pagamento, vencimento, data_alteracao, data_cadastro, id_usuario) VALUES (:preference_id, :produto, :preco, :payment_status, :data_pagamento, :vencimento, :data_alteracao, :data_cadastro, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':preference_id',$financeiro->getPreference_id()); 
		$consulta->bindValue(':produto',$financeiro->getProduto()); 
		$consulta->bindValue(':preco',$financeiro->getPreco()); 
		$consulta->bindValue(':payment_status',$financeiro->getPayment_status()); 
		$consulta->bindValue(':data_pagamento',$financeiro->getData_pagamento()); 
		$consulta->bindValue(':vencimento',$financeiro->getVencimento()); 
		$consulta->bindValue(':data_alteracao',$financeiro->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$financeiro->getData_cadastro()); 
		$consulta->bindValue(':id_usuario',LAST_INSERT_ID());
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($financeiro){
		include("../conexao/conexao.php");
		$sql = 'INSERT INTO financeiro (preference_id, produto, preco, payment_status, data_pagamento, vencimento, data_alteracao, data_cadastro, id_usuario, id_financeiro) VALUES (:preference_id, :produto, :preco, :payment_status, :data_pagamento, :vencimento, :data_alteracao, :data_cadastro, :id_usuario, :id_financeiro)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':preference_id',$financeiro->getPreference_id()); 
		$consulta->bindValue(':produto',$financeiro->getProduto()); 
		$consulta->bindValue(':preco',$financeiro->getPreco()); 
		$consulta->bindValue(':payment_status',$financeiro->getPayment_status()); 
		$consulta->bindValue(':data_pagamento',$financeiro->getData_pagamento()); 
		$consulta->bindValue(':vencimento',$financeiro->getVencimento()); 
		$consulta->bindValue(':data_alteracao',$financeiro->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$financeiro->getData_cadastro()); 
		$consulta->bindValue(':id_usuario',$financeiro->getId_usuario()); 
		$consulta->bindValue(':id_financeiro',$financeiro->getId_financeiro()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($financeiro){
		include("../conexao/conexao.php");
		$sql = 'UPDATE financeiro SET preference_id = :preference_id, produto = :produto, preco = :preco, payment_status = :payment_status, data_pagamento = :data_pagamento, vencimento = :vencimento, data_alteracao = :data_alteracao, data_cadastro = :data_cadastro, id_usuario = :id_usuario, id_financeiro = :id_financeiro WHERE id_financeiro = :id_financeiro';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':preference_id',$financeiro->getPreference_id()); 
		$consulta->bindValue(':produto',$financeiro->getProduto()); 
		$consulta->bindValue(':preco',$financeiro->getPreco()); 
		$consulta->bindValue(':payment_status',$financeiro->getPayment_status()); 
		$consulta->bindValue(':data_pagamento',$financeiro->getData_pagamento()); 
		$consulta->bindValue(':vencimento',$financeiro->getVencimento()); 
		$consulta->bindValue(':data_alteracao',$financeiro->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$financeiro->getData_cadastro()); 
		$consulta->bindValue(':id_usuario',$financeiro->getId_usuario()); 
		$consulta->bindValue(':id_financeiro',$financeiro->getId_financeiro()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../conexao/conexao.php");
		$sql = 'DELETE FROM financeiro';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>