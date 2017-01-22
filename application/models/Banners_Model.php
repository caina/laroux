<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

	function getAll() {
		$dados = $this->db->
			from('BANNERS')->
			order_by("order","asc")->get()->result();

		$dto = new BannerDto();
		$dto->populate($dados);
		return $dto;
	}

}

class BannerDto extends Dto
{

	public function getImage() {
		return image_path($this->image);
	}
}
