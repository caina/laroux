<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problemas extends MY_Controller{

	var $data;

  public function __construct() {
    parent::__construct();
		$this->load->model('Problems_Model', 'problems');
		$this->load->model('Doubts_Model', 'doubts');
		$this->load->model('Treatment_Model', 'treatments');

		$this->data["email_form"] = $this->load->view('partial/email_form', $this->data, true);
  }

  function index() {
		$this->data["problems"] = $this->problems->listing();
		$this->loadView('problema');
  }

	function detalhe($id_slug) {
		$this->load->model("Treatment_Model", "treatment");

		$this->data["problem"] = $this->problems->detail($id_slug);
		$this->data["doubts"] = $this->doubts->loadByToken($this->data["problem"]->mngr_token);
		$this->data["treatments"] = $this->treatments->getByProblem($this->data["problem"]->id);

		$thi->data["treatments"] = $this->treatment->getByProblem($this->data["problem"]->id);

		$this->loadView("problema-detalhe");
	}
}
