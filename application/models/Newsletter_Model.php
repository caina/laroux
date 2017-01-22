<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_Model extends CI_Model{

  public function __construct() {
    parent::__construct();
  }

	function save($email) {
		$this->db->insert('NEWSLETTER', array("email"=>$email));
	}

}
