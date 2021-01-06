<?php 
	/**
	 * id_telefone	fixo	celular	data_cadastro	data_alteracao	id_usuario
		id_usuario é chave estrangeira.
	 */ 
	class Telefone
	{
		private $id_telefone;
        private $fixo; //
        private $celular;
        private $id_usuario;
        
        //Setters
        public function setId_telefone($id_telefone)
        {
            $this->id_telefone = $id_telefone;
        }
        public function setFixo($fixo)
        {
            $this->fixo = $fixo;
        }
        public function SetCelular($celular)
        {
            $this->celular = $celular;
        }
        public function SetId_usuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
        }

    
        //Getters
        public function getId_telefone()
        {
            return $this->id_telefone;
        }
        public function getFixo()
        {
            return $this->fixo;
        }
        public function getCelular()
        {
            return $this->celular;
        }
        public function getId_usuario()
        {
            return $this->id_usuario;
        }

	}