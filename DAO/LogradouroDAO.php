<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class LogradouroDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_endereco){
		include("conexao.php");
		$sql = 'SELECT * FROM logradouro WHERE id_endereco = :id_endereco';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_endereco",$id_endereco);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM logradouro';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM logradouro ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_endereco){
		include("conexao.php");
		$sql = 'DELETE FROM logradouro WHERE id_endereco = :id_endereco';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_endereco",$id_endereco);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($logradouro){
		include("conexao.php");
		$sql = 'INSERT INTO logradouro (id_endereco, cep, endereco, ponto de referencia, numero, complemento, bairro, cidade, estado, data_cadastro, data_alteracao, id_usuario) VALUES (:id_endereco, :cep, :endereco, :ponto de referencia, :numero, :complemento, :bairro, :cidade, :estado, :data_cadastro, :data_alteracao, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_endereco',$logradouro->getId_endereco()); 
		$consulta->bindValue(':cep',$logradouro->getCep()); 
		$consulta->bindValue(':endereco',$logradouro->getEndereco()); 
		$consulta->bindValue(':ponto de referencia',$logradouro->getPonto de referencia()); 
		$consulta->bindValue(':numero',$logradouro->getNumero()); 
		$consulta->bindValue(':complemento',$logradouro->getComplemento()); 
		$consulta->bindValue(':bairro',$logradouro->getBairro()); 
		$consulta->bindValue(':cidade',$logradouro->getCidade()); 
		$consulta->bindValue(':estado',$logradouro->getEstado()); 
		$consulta->bindValue(':data_cadastro',$logradouro->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$logradouro->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$logradouro->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($logradouro){
		include("conexao.php");
		$sql = 'UPDATE logradouro SET id_endereco = :id_endereco, cep = :cep, endereco = :endereco, ponto de referencia = :ponto de referencia, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, estado = :estado, data_cadastro = :data_cadastro, data_alteracao = :data_alteracao, id_usuario = :id_usuario WHERE id_endereco = :id_endereco';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_endereco',$logradouro->getId_endereco()); 
		$consulta->bindValue(':cep',$logradouro->getCep()); 
		$consulta->bindValue(':endereco',$logradouro->getEndereco()); 
		$consulta->bindValue(':ponto de referencia',$logradouro->getPonto de referencia()); 
		$consulta->bindValue(':numero',$logradouro->getNumero()); 
		$consulta->bindValue(':complemento',$logradouro->getComplemento()); 
		$consulta->bindValue(':bairro',$logradouro->getBairro()); 
		$consulta->bindValue(':cidade',$logradouro->getCidade()); 
		$consulta->bindValue(':estado',$logradouro->getEstado()); 
		$consulta->bindValue(':data_cadastro',$logradouro->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$logradouro->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$logradouro->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM logradouro';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>