<?php 
	
	/**
	 * id_endereco	cep	endereco	ponto de referencia	numero	complemento	bairro	cidade	estado	id_usuario
	 */
	class Logradouro
	{
		private $id_endereco;
        private $cep; 
        private $ponto_de_referencia;
        private $numero;
        private $complemento;
        private $bairro;
        private $cidade;
        private $estado;
        private $id_usuario;
        
        //Setters
        public function setId_endereco($id_endereco)
        {
            $this->id_endereco = $id_endereco;
        }
        public function setCep($cep)
        {
            $this->cep = $cep;
        }
        public function SetPonto_de_referencia($ponto_de_referencia)
        {
            $this->ponto_de_referencia = $ponto_de_referencia;
        }
        public function SetNumero($numero)
        {
            $this->numero = $numero;
        }
        public function SetComplemento($complemento)
        {
            $this->complemento = $complemento;
        }
        public function SetBairro($bairro)
        {
            $this->bairro = $bairro;
        }
        public function SetCidade($cidade)
        {
            $this->cidade = $cidade;
        }
        public function SetEstado($estado)
        {
            $this->estado = $estado;
        }
        public function SetId_usuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
        }


        //Getters
        public function getId_endereco()
        {
            return $this->id_endereco;
        }
        public function getCep()
        {
            return $this->cep;
        }
        public function getPonto_de_referencia()
        {
            return $this->ponto_de_referencia;
        }
        public function getNumero()
        {
            return $this->numero;
        }
        public function getComplemento()
        {
            return $this->complemento;
        }
        public function getBairro()
        {
            return $this->bairro;
        }
        public function getCidade()
        {
            return $this->cidade;
        }
        public function getEstado()
        {
            return $this->estado;
        }
        public function getId_usuario()
        {
            return $this->id_usuario;
        }

	}