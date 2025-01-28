<?php
    class usuario
    {
        private $nome;
        private $user;
        private $email;
        private $senha;
        private $formacao;
        private $nascimento;
        private $foto;
        private $premium;
        private $hoje;
        private $idade;

        public function __construct($nome, $user, $email, $senha, $nascimento, $formacao)
        {
            $this->nome = $nome;
            $this->user = $user;
            $this->email = $email;
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
            $this->formacao = $formacao;
            $this->foto = "padrao.png";
            $this->premium = 0;
            $this->hoje = new DateTime();
            $this->setNascimento($nascimento);
        }
        
        public function getNome()
        {
            return $this->nome;
        }
        public function getEmail()
        {
            return $this->email;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function getNascimento()
        {
            return $this->nascimento;
        }

        public function getUser()
        {
            return $this->user;
        }

        public function getFormacao()
        {
            return $this->formacao;
        }

        public function getFoto()
        {
            return $this->foto;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function getPremium()
        {
            return $this->premium;
        }


        public function setNome($nome)
        {
            $this->nome=$nome;
        }

        public function setEmail($email)
        {
            $this->email=$email;
        }

        public function setSenha($senha)
        {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        }

        public function setNascimento($nascimento)
        {
            $dataNascimento = new DateTime($nascimento); 
            if ($dataNascimento > $this->hoje) 
            {
                $idade = 0;
            }
            else
            {
                $idade = $this->hoje->diff($dataNascimento)->y; 
                $this->idade = $idade; 
                $this->nascimento = $dataNascimento->format('Y-m-d'); 
            }
        }

        public function setUser($user)
        {
            $this->user=$user;
        }

        public function setFormacao($formacao)
        {
            $this->$formacao=$formacao;
        }

        public function setFoto($foto)
        {
            $this->$foto = $foto;
        }
    }
?>