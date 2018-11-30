<?php
class carteiraController extends controller {

    public function index() {
        $dados = array();
        $this->loadTemplate('carteira', $dados);
    }

}



?>