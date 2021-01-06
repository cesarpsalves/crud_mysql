<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Usuario{
		//Atributos
		private $id_usuario;
 		private $user;
 		private $email;
 		private $senha;
 		private $foto;
 		private $tipo;
 		private $nome;
 		private $sobrenome;
 		private $sexo;
 		private $data_nascimento;
 		private $identidade;
 		private $tipoidentidade;
 		private $cpf;
 		private $nivel_usuario;
 		private $status;
 		private $ultimo_login;
 		private $user_altera;
 		private $data_alteracao;
 		private $data_cadastro;
 				
		//Métodos Getters e Setters
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function getUser(){
			return $this->user;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function getData_nascimento(){
			return $this->data_nascimento;
		}
		public function getIdentidade(){
			return $this->identidade;
		}
		public function getTipoidentidade(){
			return $this->tipoidentidade;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getNivel_usuario(){
			return $this->nivel_usuario;
		}
		public function getStatus(){
			return $this->status;
		}
		public function getUltimo_login(){
			return $this->ultimo_login;
		}
		public function getUser_altera(){
			return $this->user_altera;
		}
		public function getData_alteracao(){
			return $this->data_alteracao;
		}
		public function getData_cadastro(){
			return $this->data_cadastro;
		}
		
		public function setId_usuario($id_usuario){
			$this->id_usuario=$id_usuario;
		}
		public function setUser($user){
			$this->user=$user;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setSobrenome($sobrenome){
			$this->sobrenome=$sobrenome;
		}
		public function setSexo($sexo){
			$this->sexo=$sexo;
		}
		public function setData_nascimento($data_nascimento){
			$this->data_nascimento=$data_nascimento;
		}
		public function setIdentidade($identidade){
			$this->identidade=$identidade;
		}
		public function setTipoidentidade($tipoidentidade){
			$this->tipoidentidade=$tipoidentidade;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setNivel_usuario($nivel_usuario){
			$this->nivel_usuario=$nivel_usuario;
		}
		public function setStatus($status){
			$this->status=$status;
		}
		public function setUltimo_login($ultimo_login){
			$this->ultimo_login=$ultimo_login;
		}
		public function setUser_altera($user_altera){
			$this->user_altera=$user_altera;
		}
		public function setData_alteracao($data_alteracao){
			$this->data_alteracao=$data_alteracao;
		}
		public function setData_cadastro($data_cadastro){
			$this->data_cadastro=$data_cadastro;
		}
		
	}
?>