<?php
class carteiras extends model {

    private $usuario;

    public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		}else {
			return false; // retorna valor false.
		}
    }

    public function ViewHome() {
        $array = array();

        $sql = "SELECT * FROM carteira WHERE status = 'on' ";
        $qry = $this->db->query($sql);

        if($qry->rowCount() > 0) {
            $array = $qry->fetchAll();
        } else {
            header('Location: '.URL.'/carteira/info');
        }
        return $array;
    }

    public function ViewInfo() {
        $sql = "SELECT * FROM carteira";
        $qry = $this->db->query($sql);

        if($qry->rowCount() > 0) {
            header('Location: '.URL.'/carteira');
        } else {
            $array = $qry->fetchAll();
        }
        return $array;
    }

    public function add($usuario, $titulo, $cor, $descricao, $status) {
        $sql = "INSERT INTO carteira (usuarios_id, titulo, cor, descricao, status, criado, modificado)";
        $sql.= "VALUE ('$usuario', '$titulo', '$cor', '$descricao', '$status', NOW(), NOW())";
        $this->db->query($sql);
    }
}

?>