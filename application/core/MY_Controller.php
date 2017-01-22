<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	var $data;

  public function __construct() {
    parent::__construct();

		$this->data["configuration"] = $this->configuration->load();
		$this->data["head_tratamentos"] = $this->tratamento_model->getAll();
		$this->data["head_problems"] = $this->problems_model->getAll();

		$this->data["home"] = false;
  }

  function loadView($view) {
	$this->load->view('partial/head', $this->data);
	$this->load->view($view, $this->data);
	$this->load->view('partial/footer', $this->data);
  }

  function loadBlogView($view) {
  	$this->load->view('blog/partial/head', $this->data);
	$this->load->view("blog/{$view}", $this->data);
	$this->load->view('blog/partial/footer', $this->data);
  }
}
