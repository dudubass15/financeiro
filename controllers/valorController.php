<?php
class valorController extends controller {

    public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/usuarios/login');
		}
    }
    
    public function adicionar() {
        $dados = array();

        $valor = new valores();

        $this->loadView('cadastro_valores', $dados);
    }
}
?>