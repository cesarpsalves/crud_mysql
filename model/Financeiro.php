<?php 
	
	/**
     *  @Autor: Paulo Alves
	 * preference_id	produto	preco	payment_status	data_pagamento	vencimento	id_usuario	id_financeiro
	 */
	class Financeiro
	{
		private $id_financeiro;
        private $vencimento; //
        private $data_pagamento;
        private $produto;
        private $preco;
        private $payment_status;
        private $id_usuario;
        private $preference_id;
        
        //Setters
        public function setId_financeiro($id_financeiro)
        {
            $this->id_financeiro = $id_financeiro;
        }
        public function setVencimento($vencimento)
        {
            $this->vencimento = $vencimento;
        }
        public function SetData_pagamento($data_pagamento)
        {
            $this->data_pagamento = $data_pagamento;
        }
        public function SetProduto($produto)
        {
            $this->produto = $produto;
        }
        public function SetPreco($preco)
        {
            $this->preco = $preco;
        }
        public function SetPayment_status($payment_status)
        {
            $this->payment_status = $payment_status;
        }
        public function SetId_usuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
        }
        public function SetPreference_id($preference_id)
        {
            $this->preference_id = $preference_id;
        }

    
        //Getters
        public function getId_financeiro()
        {
            return $this->id_financeiro;
        }
        public function getVencimento()
        {
            return $this->vencimento;
        }
        public function getData_pagamento()
        {
            return $this->data_pagamento;
        }
        public function getProduto()
        {
            return $this->produto;
        }
        public function getPreco()
        {
            return $this->preco;
        }
        public function getPayment_status()
        {
            return $this->payment_status;
        }
        public function getId_usuario()
        {
            return $this->id_usuario;
        }
        public function getPreference_id()
        {
            return $this->preference_id;
        }

	}