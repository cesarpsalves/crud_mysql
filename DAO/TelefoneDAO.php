<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class TelefoneDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_telefone){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM telefone WHERE id_telefone = :id_telefone';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_telefone",$id_telefone);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM telefone';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../conexao/conexao.php");
		$sql = 'SELECT * FROM telefone ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_telefone){
		include("../conexao/conexao.php");
		$sql = 'DELETE FROM telefone WHERE id_telefone = :id_telefone';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_telefone",$id_telefone);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
		//Cadastrar pela primeira vez do Form cadastrar_aluno.php
	public function cadastrar($telefone){
		include("../conexao/conexao.php");
		$sql = 'INSERT INTO telefone (fixo, celular, data_cadastro, data_alteracao, id_usuario) VALUES (:fixo, :celular, :data_cadastro, :data_alteracao, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':fixo',$telefone->getFixo()); 
		$consulta->bindValue(':celular',$telefone->getCelular()); 
		$consulta->bindValue(':data_cadastro',$telefone->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$telefone->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',LAST_INSERT_ID());
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Insere um elemento na tabela
	public function inserir($telefone){
		include("../conexao/conexao.php");
		$sql = 'INSERT INTO telefone (id_telefone, fixo, celular, data_cadastro, data_alteracao, id_usuario) VALUES (:id_telefone, :fixo, :celular, :data_cadastro, :data_alteracao, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_telefone',$telefone->getId_telefone()); 
		$consulta->bindValue(':fixo',$telefone->getFixo()); 
		$consulta->bindValue(':celular',$telefone->getCelular()); 
		$consulta->bindValue(':data_cadastro',$telefone->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$telefone->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$telefone->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($telefone){
		include("../conexao/conexao.php");
		$sql = 'UPDATE telefone SET id_telefone = :id_telefone, fixo = :fixo, celular = :celular, data_cadastro = :data_cadastro, data_alteracao = :data_alteracao, id_usuario = :id_usuario WHERE id_telefone = :id_telefone';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_telefone',$telefone->getId_telefone()); 
		$consulta->bindValue(':fixo',$telefone->getFixo()); 
		$consulta->bindValue(':celular',$telefone->getCelular()); 
		$consulta->bindValue(':data_cadastro',$telefone->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$telefone->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$telefone->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../conexao/conexao.php");
		$sql = 'DELETE FROM telefone';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>