<?php
class valores extends model {
    private $usuario;

    public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		}else {
			return false; // retorna valor false.
		}
    }
}
?>