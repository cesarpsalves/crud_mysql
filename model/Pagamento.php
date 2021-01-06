<?php 

	/**
     *  @Autor: Paulo Alves
	 * id_pagamento	reg_data_pagamento	situacao id_usuario
	 */
	class Pagamento
	{
		private $id_pagamento;
        private $reg_data_pagamento;
        private $situacao;
        private $id_usuario;
        
        //Setters
        public function setId_pagamento($id_pagamento)
        {
            $this->id_pagamento = $id_pagamento;
        }
        public function setReg_data_pagamento($reg_data_pagamento)
        {
            $this->reg_data_pagamento = $reg_data_pagamento;
        }
        public function SetSituacao($situacao)
        {
            $this->situacao = $situacao;
        }
        public function SetId_usuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
        }

    
        //Getters
        public function getId_pagamento()
        {
            return $this->id_pagamento;
        }
        public function getReg_data_pagamento()
        {
            return $this->reg_data_pagamento;
        }
        public function getSituacao()
        {
            return $this->situacao;
        }
        public function getId_usuario()
        {
            return $this->id_usuario;
        }

	}