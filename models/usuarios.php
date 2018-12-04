<?php
class usuarios extends model {

    private $usuario;

    public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		}else {
			return false; // retorna valor false.
		}
	}

    public function validaLogin($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $qry = $this->db->query($sql);

        if($qry->rowCount() > 0) {
            $row = $qry->fetch();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];

            return true;
        }

        return false;
    }

    public function add($status, $nome, $sobrenome, $data_nascimento, $celular, $idade, $cpf, $email, $senha) {
        $sql = "INSERT INTO usuarios (status, nome, sobrenome, data_nascimento, celular, idade, cpf, email, senha, criado, modificado)";
        $sql.= "VALUE ('$status', '$nome', '$sobrenome', '$data_nascimento', '$celular', '$idade', '$cpf', '$email', '$senha', NOW(), NOW())";
        $this->db->query($sql);
    }
}
?>