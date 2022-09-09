<?php
	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;
	use App\Models\Produto;

	class IndexController extends Action {

		public function index() {
			//$this->view->dados = array('sofa', 'cadeira', 'cama');
			
			//instancia de conexão
			$conn = Connection::getDb();

			//instancia modelo
			$produto = new Produto($conn);
			
			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
			$this->render('index', 'layout3');
		}

		public function sobreNos() {
			$this->view->dados = array('Notebook','Smartphone');
			$this->render('sobreNos', 'layout2');
		}
	}
?>