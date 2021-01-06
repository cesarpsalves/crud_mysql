<?php

class Usuario{
    
        private $id;
        private $user; //
        private $email; //
        private $senha; //
        private $foto; //
        private $tipo; //
        private $nome; //
        private $sobrenome; //
        private $sexo; //
        private $data_nascimento; //
        private $identidade; //
        private $tipoidentidade; //
        private $cpf; //
        private $nivel_usuario; //
        private $status;
        
        //Setters
        public function setId($Id)
        {
            $this->id = $Id;
        }
        public function setUser($User)
        {
            $this->user = $User;
        }
        public function SetEmail($Email)
        {
            $this->email = $Email;
        }
        public function setSenha($Senha)
        {
            $this->senha = $Senha;
        }
        public function SetFoto($Foto)
        {
            $this->foto = $Foto;
        }
        public function SetTipo($Tipo)
        {
            $this->tipo = $Tipo;
        }
        public function SetNome($Nome)
        {
            $this->nome = $Nome;
        }
        public function SetSobrenome($Sobrenome)
        {
            $this->sobrenome = $Sobrenome;
        }
        public function SetSexo($Sexo)
        {
            $this->sexo = $Sexo;
        }
        public function SetData_nascimento($Data_nascimento)
        {
            $this->data_nascimento = $Data_nascimento;
        }
        public function SetIdentidade($Identidade)
        {
            $this->identidade = $Identidade;
        }
        public function SetTipoidentidade($Tipoidentidade)
        {
            $this->tipoidentidade = $Tipoidentidade;
        }
        public function SetCpf($Cpf)
        {
            $this->cpf = $Cpf;
        }
        public function SetNivel_usuario($Nivel_usuario)
        {
            $this->nivel_usuario = $Nivel_usuario;
        }
        public function SetStatus($Status)
        {
            $this->status = $Status;
        }

    
        //Getters
        public function getId()
        {
            return $this->id;
        }
        public function getUser()
        {
            return $this->user;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getSenha()
        {
            return $this->senha;
        }
        public function getFoto()
        {
            return $this->foto;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getSobrenome()
        {
            return $this->sobrenome;
        }
        public function getSexo()
        {
            return $this->sexo;
        }
        public function getData_Nascimento()
        {
            return $this->data_nascimento;
        }
        public function getIdentidade()
        {
            return $this->identidade;
        }
        public function getTipoidentidade()
        {
            return $this->tipoidentidade;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getNivel_usuario()
        {
            return $this->nivel_usuario;
        }
        public function getStatus()
        {
            return $this->status;
        }

    
}

