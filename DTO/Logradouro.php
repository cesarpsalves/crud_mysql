<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Logradouro{
		//Atributos
		private $id_endereco;
 		private $cep;
 		private $endereco;
 		private $ponto de referencia;
 		private $numero;
 		private $complemento;
 		private $bairro;
 		private $cidade;
 		private $estado;
 		private $data_cadastro;
 		private $data_alteracao;
 		private $id_usuario;
 				
		//Métodos Getters e Setters
		public function getId_endereco(){
			return $this->id_endereco;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function getPonto_de_referencia(){
			return $this->ponto_de_referencia;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getComplemento(){
			return $this->complemento;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEstado(){
			return $this->estado;
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
		
		public function setId_endereco($id_endereco){
			$this->id_endereco=$id_endereco;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}
		public function setPonto de referencia($ponto de referencia){
			$this->ponto de referencia=$ponto de referencia;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setComplemento($complemento){
			$this->complemento=$complemento;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setEstado($estado){
			$this->estado=$estado;
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