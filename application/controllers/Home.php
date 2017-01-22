<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	var $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('Banners_Model',"banner");
	}

	public function index(){
		$this->data["home"] = true;
		$this->data["banners"] = $this->banner->getAll();
		$this->loadView("home");
	}

	function sendEmail() {

		$nome 	 = $this->input->get_post('nome');
		$celular = $this->input->get_post('celular');
		$email 	 = $this->input->get_post('email');
		$idade 	 = $this->input->get_post('idade');

		$this->load->library('email');
		$this->email->from($email, $nome);
		$this->email->to($this->data["configuration"]->email);
		$this->email->subject('Contato via site: '.date("d/m/Y"));
		$this->email->message("
			Contato recebido pelo site para agendamento de consulta:<br>
			Nome: {$nome}<br/>
			Phone: {$celular}<br>
			Email: {$email} <br/>
			Idade: {$idade}
		");

		$this->email->send();
	}

	function saveNews() {
		$this->load->model("Newsletter_Model","news");

		$email = $this->input->post_get('email');
		if(!empty($email)) {
			$this->news->save($email);
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */