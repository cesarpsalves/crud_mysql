<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class FeriadoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_feriado){
		include("conexao.php");
		$sql = 'SELECT * FROM feriados WHERE id_feriado = :id_feriado';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_feriado",$id_feriado);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM feriados';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM feriados ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_feriado){
		include("conexao.php");
		$sql = 'DELETE FROM feriados WHERE id_feriado = :id_feriado';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_feriado",$id_feriado);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($feriado){
		include("conexao.php");
		$sql = 'INSERT INTO feriados (id_feriado, date, nome, descricao, tipo, codtipo) VALUES (:id_feriado, :date, :nome, :descricao, :tipo, :codtipo)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_feriado',$feriado->getId_feriado()); 
		$consulta->bindValue(':date',$feriado->getDate()); 
		$consulta->bindValue(':nome',$feriado->getNome()); 
		$consulta->bindValue(':descricao',$feriado->getDescricao()); 
		$consulta->bindValue(':tipo',$feriado->getTipo()); 
		$consulta->bindValue(':codtipo',$feriado->getCodtipo()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($feriado){
		include("conexao.php");
		$sql = 'UPDATE feriados SET id_feriado = :id_feriado, date = :date, nome = :nome, descricao = :descricao, tipo = :tipo, codtipo = :codtipo WHERE id_feriado = :id_feriado';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_feriado',$feriado->getId_feriado()); 
		$consulta->bindValue(':date',$feriado->getDate()); 
		$consulta->bindValue(':nome',$feriado->getNome()); 
		$consulta->bindValue(':descricao',$feriado->getDescricao()); 
		$consulta->bindValue(':tipo',$feriado->getTipo()); 
		$consulta->bindValue(':codtipo',$feriado->getCodtipo()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM feriados';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>