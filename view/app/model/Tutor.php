<?php 

	/**
	 * 	id_responsavel	responsavel	id_usuario
	 */
	class Tutor
	{
		private $id_responsavel;
        private $responsavel;
        private $id_usuario;
        
        //Setters
        public function setId_responsavel($id_responsavel)
        {
            $this->id_responsavel = $id_responsavel;
        }
        public function setResponsavel($responsavel)
        {
            $this->responsavel = $responsavel;
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