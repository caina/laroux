<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get(){
		$sobreDto = new SobreDto();
		return $sobreDto->get();
	}

}

class SobreDto extends Dto {

	var $foto_esquerda;
	var $foto_centro;
	var $foto_centro_baixo;
	var $foto_direita;
	var $TABLE = "SOBRE";

	function getFotoEsquerda() {
		return image_path($this->foto_esquerda);
	}

	function getFotoCentro() {
		return image_path($this->foto_centro);
	}

	function getFotoCentroBaixo() {
		return image_path($this->foto_centro_baixo);
	}

	function getFotoDireita() {
		return image_path($this->foto_direita);
	}
}

/* End of file  */
/* Location: ./application/models/ */
