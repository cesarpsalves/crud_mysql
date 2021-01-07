<?php

	/* @Autor: Paulo Alves
	   Classe DAO */
	   
class UsuarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id_usuario){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario WHERE id_usuario = :id_usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_usuario",$id_usuario);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id_usuario){
		include("conexao.php");
		$sql = 'DELETE FROM usuario WHERE id_usuario = :id_usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id_usuario",$id_usuario);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($usuario){
		include("../conexao/conexao.php");
		$sql = 'INSERT INTO usuario (email, senha, foto, tipo, nome, sobrenome, sexo, data_nascimento, identidade, tipoidentidade, cpf, nivel_usuario, status) VALUES (:email, :senha, :foto, :tipo, :nome, :sobrenome, :sexo, :data_nascimento, :identidade, :tipoidentidade, :cpf, :nivel_usuario, :status)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		$consulta->bindValue(':foto',$usuario->getFoto()); 
		$consulta->bindValue(':tipo',$usuario->getTipo()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':sobrenome',$usuario->getSobrenome()); 
		$consulta->bindValue(':sexo',$usuario->getSexo()); 
		$consulta->bindValue(':data_nascimento',$usuario->getData_nascimento()); 
		$consulta->bindValue(':identidade',$usuario->getIdentidade()); 
		$consulta->bindValue(':tipoidentidade',$usuario->getTipoidentidade()); 
		$consulta->bindValue(':cpf',$usuario->getCpf()); 
		$consulta->bindValue(':nivel_usuario',$usuario->getNivel_usuario()); 
		$consulta->bindValue(':status',$usuario->getStatus());
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($usuario){
		include("../conexao/conexao.php");
		$sql = 'UPDATE usuario SET id_usuario = :id_usuario, user = :user, email = :email, senha = :senha, foto = :foto, tipo = :tipo, nome = :nome, sobrenome = :sobrenome, sexo = :sexo, data_nascimento = :data_nascimento, identidade = :identidade, tipoidentidade = :tipoidentidade, cpf = :cpf, nivel_usuario = :nivel_usuario, status = :status, ultimo_login = :ultimo_login, user_altera = :user_altera, data_alteracao = :data_alteracao, data_cadastro = :data_cadastro WHERE id_usuario = :id_usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id_usuario',$usuario->getId_usuario()); 
		$consulta->bindValue(':user',$usuario->getUser()); 
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		$consulta->bindValue(':foto',$usuario->getFoto()); 
		$consulta->bindValue(':tipo',$usuario->getTipo()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':sobrenome',$usuario->getSobrenome()); 
		$consulta->bindValue(':sexo',$usuario->getSexo()); 
		$consulta->bindValue(':data_nascimento',$usuario->getData_nascimento()); 
		$consulta->bindValue(':identidade',$usuario->getIdentidade()); 
		$consulta->bindValue(':tipoidentidade',$usuario->getTipoidentidade()); 
		$consulta->bindValue(':cpf',$usuario->getCpf()); 
		$consulta->bindValue(':nivel_usuario',$usuario->getNivel_usuario()); 
		$consulta->bindValue(':status',$usuario->getStatus()); 
		$consulta->bindValue(':ultimo_login',$usuario->getUltimo_login()); 
		$consulta->bindValue(':user_altera',$usuario->getUser_altera()); 
		$consulta->bindValue(':data_alteracao',$usuario->getData_alteracao()); 
		$consulta->bindValue(':data_cadastro',$usuario->getData_cadastro()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM usuario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>