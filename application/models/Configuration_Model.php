<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration_Model extends CI_Model{

  public function __construct() {
    parent::__construct();
  }

	function load() {
		$data = $this->db->get('CONFIGURATIONS')->row();
		$dto = new ConfigurationDto();
		$dto->populate($data);
		return $dto;
	}

}
/**
 *
 */
class ConfigurationDto extends Dto {

}
