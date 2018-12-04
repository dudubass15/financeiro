<?php
class carteiraController extends controller {

    public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/usuarios/login');
		}
	}

    public function index() {
        $dados = array();

        $carteira = new carteiras();

        $dados['ViewCarteira'] = $carteira->ViewHome();

        //print_r($dados); die;

        $this->loadView('carteira', $dados);
    }

    public function msg() {
        $dados = array();

        $this->loadView('teste', $dados);
    }

}



?>