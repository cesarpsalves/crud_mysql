<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class TutorDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_responsavel){
		include("conexao.php");
		$sql = 'SELECT * FROM tutor WHERE id_responsavel = :id_responsavel';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_responsavel",$id_responsavel);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM tutor';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM tutor ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_responsavel){
		include("conexao.php");
		$sql = 'DELETE FROM tutor WHERE id_responsavel = :id_responsavel';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_responsavel",$id_responsavel);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($tutor){
		include("conexao.php");
		$sql = 'INSERT INTO tutor (id_responsavel, responsavel, data_cadastro, data_alteracao, id_usuario) VALUES (:id_responsavel, :responsavel, :data_cadastro, :data_alteracao, :id_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_responsavel',$tutor->getId_responsavel()); 
		$consulta->bindValue(':responsavel',$tutor->getResponsavel()); 
		$consulta->bindValue(':data_cadastro',$tutor->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$tutor->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$tutor->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($tutor){
		include("conexao.php");
		$sql = 'UPDATE tutor SET id_responsavel = :id_responsavel, responsavel = :responsavel, data_cadastro = :data_cadastro, data_alteracao = :data_alteracao, id_usuario = :id_usuario WHERE id_responsavel = :id_responsavel';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_responsavel',$tutor->getId_responsavel()); 
		$consulta->bindValue(':responsavel',$tutor->getResponsavel()); 
		$consulta->bindValue(':data_cadastro',$tutor->getData_cadastro()); 
		$consulta->bindValue(':data_alteracao',$tutor->getData_alteracao()); 
		$consulta->bindValue(':id_usuario',$tutor->getId_usuario()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM tutor';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>