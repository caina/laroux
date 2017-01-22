<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function hasCache($key){
		return !empty($_SESSION[$key]);
	}

	function criaCache($key, $valor){
		$_SESSION[$key] = serialize($valor);
	}

	function loadCache($key){
		return unserialize($_SESSION[$key]);
	}

}

class Dto extends MY_Model{

	function getLink() {
		$link = "";
		if(!empty($this->slug)) {
			$link = $this->PATH."/".$this->slug;
		}else {
			$link = $this->PATH."/".$this->id;
		}
		return site_url($link);
	}

	/**
		Usando uma lista de resultados, transforma num objeto,
		no nosso caso o mesmo que foi chamado o populate
	*/
	function populate($dadosQuery){
		if(is_array($dadosQuery)){
			$class = get_class($this);
			$this->list = array();
			foreach ($dadosQuery as $dados) {
				$this->list[] = $this->populaClasse(new $class(), $dados);
			}
		}else {
			$this->populaClasse($this, $dadosQuery);
		}
	}

	function populaClasse($classe, $dados){
		foreach ($dados as $chave => $valor) {
			$classe->$chave = $valor;
		}
		return $classe;
	}

}

/* End of file mY_Model.php */
/* Location: ./application/models/mY_Model.php */
?>
