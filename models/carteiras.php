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
        $sql = "SELECT * FROM carteira";
        $qry = $this->db->query($sql);

        if($qry->rowCount() > 0) {
            $array = $qry->fetchAll();
        } else {
            header('Location: '.URL.'/carteira/msg');
        }

        return $array;
    }
}

?>