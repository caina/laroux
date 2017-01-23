<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Blog_Model', 'blog_model');

		$this->data["categorias"] = $this->blog_model->getCategories();
	}

	public function index($page = 0) {
		$this->data["posts"] = $this->blog_model->getPerPage($page);

		// $this->loadView("blog_list");
		$this->loadBlogView("listagem");
	}
	
	function categoria($id) {
		$this->data["posts"] = $this->blog_model->getByCategory($id);
		$this->loadBlogView("listagem");
	}

	function pesquisa() {
		$term = $this->input->get_post('search', TRUE);
		$this->data["posts"] = $this->blog_model->search($term);
		$this->loadBlogView("listagem");
	}

	function detalhe($slug_or_id) {
		$this->data["post"] = $this->blog_model->detail($slug_or_id);
		
		if(empty($this->data["post"]->id)) {
			redirect('blog','refresh');
			exit;
		}

		$this->loadBlogView("detalhe");	
	}


}

/* End of file  */
/* Location: ./application/controllers/ */