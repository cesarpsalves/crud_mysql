<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Financeiro{
		//Atributos
		private $preference_id;
 		private $produto;
 		private $preco;
 		private $payment_status;
 		private $data_pagamento;
 		private $vencimento;
 		private $data_alteracao;
 		private $data_cadastro;
 		private $id_usuario;
 		private $id_financeiro;
 				
		//Métodos Getters e Setters
		public function getPreference_id(){
			return $this->preference_id;
		}
		public function getProduto(){
			return $this->produto;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function getPayment_status(){
			return $this->payment_status;
		}
		public function getData_pagamento(){
			return $this->data_pagamento;
		}
		public function getVencimento(){
			return $this->vencimento;
		}
		public function getData_alteracao(){
			return $this->data_alteracao;
		}
		public function getData_cadastro(){
			return $this->data_cadastro;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function getId_financeiro(){
			return $this->id_financeiro;
		}
		
		public function setPreference_id($preference_id){
			$this->preference_id=$preference_id;
		}
		public function setProduto($produto){
			$this->produto=$produto;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		public function setPayment_status($payment_status){
			$this->payment_status=$payment_status;
		}
		public function setData_pagamento($data_pagamento){
			$this->data_pagamento=$data_pagamento;
		}
		public function setVencimento($vencimento){
			$this->vencimento=$vencimento;
		}
		public function setData_alteracao($data_alteracao){
			$this->data_alteracao=$data_alteracao;
		}
		public function setData_cadastro($data_cadastro){
			$this->data_cadastro=$data_cadastro;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario=$id_usuario;
		}
		public function setId_financeiro($id_financeiro){
			$this->id_financeiro=$id_financeiro;
		}
		
	}
?>