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

    // public function msg() {
    //     $dados = array();

    //     $this->loadView('teste', $dados);
    // }

    public function cadastro() {
        $dados = array();

        $carteira = new carteiras();
        
        if(isset($_POST['cor']) && !empty($_POST['cor'])) {
            $usuario = $_SESSION['id'];
            $cor = $_POST['cor'];
            $descricao = $_POST['descricao'];
            $status = $_POST['status'];

            $carteira->add($usuario, $cor, $descricao, $status);

            header('Location: '.URL.'/carteira');
        }

        $this->loadView('carteira', $dados);
    }

}



?>