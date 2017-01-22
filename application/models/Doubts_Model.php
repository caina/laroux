<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doubts_Model extends CI_Model{

  public function __construct() {
    parent::__construct();
  }

	function loadByToken($token) {
		$questions = $this->db->get_where('DOUBTS', array("mngr_token"=>$token))->result();
		$doubt = new DoubtDto();
		$doubt->populate($questions);
		return $doubt;
	}

}

class DoubtDto extends Dto {

	function __construct() { }
	
}
