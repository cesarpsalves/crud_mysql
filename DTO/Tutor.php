<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Tutor{
		//Atributos
		private $id_responsavel;
 		private $responsavel;
 		private $data_cadastro;
 		private $data_alteracao;
 		private $id_usuario;
 				
		//Métodos Getters e Setters
		public function getId_responsavel(){
			return $this->id_responsavel;
		}
		public function getResponsavel(){
			return $this->responsavel;
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
		
		public function setId_responsavel($id_responsavel){
			$this->id_responsavel=$id_responsavel;
		}
		public function setResponsavel($responsavel){
			$this->responsavel=$responsavel;
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