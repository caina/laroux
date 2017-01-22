<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tratamento extends MY_Controller{

  public function __construct() {
    parent::__construct();
		$this->load->model('Problems_Model', 'problems');
		$this->load->model("Treatment_Model", "treatment_model");
		$this->load->model('Doubts_Model', 'doubts');
		$this->data["email_form"] = $this->load->view('partial/email_form', $this->data, true);
  }

	function index() {
		$this->data["treatment"] = $this->treatment_model->getAll();
		$this->loadView("tratamento");
	}

  function detalhe($idOrSlug) {
		$treatment = $this->treatment_model->detail($idOrSlug);
		$this->data["doubts"] = $this->doubts->loadByToken($treatment->mngr_token);
		$this->data["problems"] = $this->problems->related($treatment->mngr_token);
		$this->data["treatment"] = $treatment;
		$this->loadView("tratamento-detalhe");
	}

	function categoria($id) {
		$this->data["treatment"] = $this->treatment_model->getByCategoria($id);
		$this->loadView("tratamento");
	}

}
