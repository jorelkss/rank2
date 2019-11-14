<?php
	class User{
		private $id_usuario;
		private $nome = "";
		private $email = "";

		function __construct($id_usuario, $nome, $email){
			$this->id_usuario = $id_usuario;
			$this->nome = $nome;
			$this->email = $email;
		}

		public function getId(){
			return $this->id_usuario;
		}

	    public function getNome() {
	        return $this->nome;
	    }

	    public function setNome($nome) {
	        $this->nome = $nome;
	    }

	    public function getEmail() {
	        return $this->email;
	    }

	    public function setEmail($email) {
	        $this->email = $email;
	    }
	}
?>