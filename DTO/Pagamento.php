<?php

	/* @Autor: Paulo Alves
	   Atributos e métodos da classe */
	   
	class Pagamento{
		//Atributos
		private $id_pagamento;
 		private $reg_data_pagamento;
 		private $situacao;
 		private $data_alteracao;
 		private $data_cadastro;
 		private $id_usuario;
 				
		//Métodos Getters e Setters
		public function getId_pagamento(){
			return $this->id_pagamento;
		}
		public function getReg_data_pagamento(){
			return $this->reg_data_pagamento;
		}
		public function getSituacao(){
			return $this->situacao;
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
		
		public function setId_pagamento($id_pagamento){
			$this->id_pagamento=$id_pagamento;
		}
		public function setReg_data_pagamento($reg_data_pagamento){
			$this->reg_data_pagamento=$reg_data_pagamento;
		}
		public function setSituacao($situacao){
			$this->situacao=$situacao;
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
		
	}
?>