<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Feriado{
		//Atributos
		private $id_feriado;
 		private $date;
 		private $nome;
 		private $descricao;
 		private $tipo;
 		private $codtipo;
 				
		//Métodos Getters e Setters
		public function getId_feriado(){
			return $this->id_feriado;
		}
		public function getDate(){
			return $this->date;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function getCodtipo(){
			return $this->codtipo;
		}
		
		public function setId_feriado($id_feriado){
			$this->id_feriado=$id_feriado;
		}
		public function setDate($date){
			$this->date=$date;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function setCodtipo($codtipo){
			$this->codtipo=$codtipo;
		}
		
	}
?>