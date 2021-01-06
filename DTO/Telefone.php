<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Telefone{
		//Atributos
		private $id_telefone;
 		private $fixo;
 		private $celular;
 		private $data_cadastro;
 		private $data_alteracao;
 		private $id_usuario;
 				
		//Métodos Getters e Setters
		public function getId_telefone(){
			return $this->id_telefone;
		}
		public function getFixo(){
			return $this->fixo;
		}
		public function getCelular(){
			return $this->celular;
		}
		public function getData_cadastro(){
			return $this->data_cadastro;
		}
		public function getData_alteracao(){
			return $this->data_alteracao;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		
		public function setId_telefone($id_telefone){
			$this->id_telefone=$id_telefone;
		}
		public function setFixo($fixo){
			$this->fixo=$fixo;
		}
		public function setCelular($celular){
			$this->celular=$celular;
		}
		public function setData_cadastro($data_cadastro){
			$this->data_cadastro=$data_cadastro;
		}
		public function setData_alteracao($data_alteracao){
			$this->data_alteracao=$data_alteracao;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario=$id_usuario;
		}
		
	}
?>