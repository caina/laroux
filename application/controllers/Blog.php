<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Blog_Model', 'blog_model');
		$this->data["categorias"] = $this->blog_model->getCategories();
		$this->data["sidebar"] = $this->load->view('blog_sidebar', $this->data, TRUE);
		$this->data["current_page"] = 0;
	}

	function index($page = 0) {
		$this->data["posts"] = $this->blog_model->getPerPage($page);

		$this->data["current_page"] = $page;
		$this->loadView("blog_list");
	}
	
	function categoria($categoria) {
		$this->data["posts"] = $this->blog_model->getByCategory($categoria);
		$this->loadView("blog_list");
	}

	function pesquisa() {
		$term = $this->input->get_post('search', TRUE);
		$this->data["posts"] = $this->blog_model->search($term);

		if(empty($this->data["posts"]->list)) {
			redirect('blog/','refresh');
		}

		$this->loadView("blog_list");
	}

	function detalhe($slug_or_id) {
		$this->data["post"] = $this->blog_model->detail($slug_or_id);
		
		if(empty($this->data["post"]->id)) {
			redirect('blog','refresh');
			exit;
		}

		$this->loadView("blog_post");
	}


}

/* End of file  */
/* Location: ./application/controllers/ */