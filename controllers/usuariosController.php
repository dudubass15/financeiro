<?php
class usuariosController extends controller {

	private $usuario;

	public function login(){
		$dados = array();

		if(isset($_POST['email']) && !empty($_POST['email'])) {
			$email = $_POST['email'];
			$senha = md5($_POST['senha']);

			$usuario = new usuarios();

			if($usuario->validaLogin($email, $senha)) {
				header('Location: '.URL.'/home');
			} else {
				echo '<script>alert("Usuario e Senha inválidos !");</script>';
			}
		}

		$this->loadView('login', $dados);
	}

	public function cadastro(){
		$dados = array();

		$usuario = new usuarios();

		//$dados = $usuario->getAdd();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$data_nascimento = addslashes($_POST['data_nascimento']);
			$idade = addslashes($_POST['idade']);
			$cpf = addslashes($_POST['cpf']);
			$celular = addslashes($_POST['celular']);
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);
			$status = '1';

			$usuario->add($status, $nome, $sobrenome, $data_nascimento, $celular, $idade, $cpf, $email, $senha);

			header('Location: '.URL.'/usuarios/login');
		}

		$this->loadView('cadastro_users', $dados);
	}

	public function view(){
		$dados = array();
		$this->loadTemplate('usuarios', $dados);
	}

	public function logout() {
		unset($_SESSION['id']); //Destroi a SESSION ID.
		unset($_SESSION['email']); //Destroi a SESSION.
		unset($_SESSION['senha']); //Destroi a SESSION.
		session_destroy();
		header('Location: '.URL.'/usuarios/login');	
	}
}

?>