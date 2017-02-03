<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model {

	public function __construct() {
		parent::__construct();		
	}

	function getPerPage($page) {
		$dto = new BlogDto();
		$itens_per_page = $dto->ITENS_PAGE;
		$page = $page * $itens_per_page;
		$posts = $this->db->query("select * from blog_post order by id DESC limit {$page}, {$itens_per_page}  ")->result();
		// dump($this->db->last_query());
		return $this->dataPopulate($posts, $page);
	}

	function getNumerPages() {
		return $this->db->query("select count(id) as total from blog_post")->row()->total;
	}

	function search($term) {
		$posts = $this->db->
			from("blog_post")->
			where("title like", "%".str_replace(" ", "%", $term)."%")->get()->result();
		return $this->dataPopulate($posts);
	}

	function getByCategory($categoria) {
		$posts = $this->db->
			select("blog_post.*")->
			from("blog_post")->
			join("blog_post_category","blog_post_category.id_blog_post = blog_post.id")->
			join("blog_category","blog_post_category.id_blog_category = blog_category.id")->
			where("blog_category.title like","%".str_replace("-", "%",$categoria)."%" )->
			order_by("blog_post.id", "DESC")->get()->result();
			//  dump($this->db->last_query());
		return $this->dataPopulate($posts);
	}

	function dataPopulate($data, $page = null) {
		$dto = new BlogDto();
		$dto->populate($data);
		$dto->total = $this->getNumerPages();
		$dto->page = $page;
		return $dto;
	}

	function checkIfSlug($slug_or_id) {
		return !is_numeric($slug_or_id);
	}

	function getCategories() {
		$data = $this->db->get('blog_category')->result();
		$cat = new PostCategoryDto();
		$cat->populate($data);
		return $cat;
	}

	function detail($slug_or_id) {
		$is_slug = $this->checkIfSlug($slug_or_id);
		if($is_slug) {
			return $this->getBySlug($slug_or_id);
		} else {
			return $this->getById($slug_or_id);
		}
	}

	function getById($id) {
		$post = new BlogDto();
		$post->populate($this->db->get_where('blog_post', array("id" => $id))->row());
		return $post;
	}

	function getBySlug($slug) {
		$post = new BlogDto();
		$post->populate($this->db->get_where('blog_post', array("slug" => $slug))->row());
		return $post;
	}

}

class BlogDto extends Dto {
	
	var $PATH = "blog";
	var $ITENS_PAGE = 10;

	function getImage() {
		return image_path($this->cover_photo);
	}
	
	function getEye() {
		return word_limiter($this->entry, 100);
	}

	function getDate() {
		return date("d/M/Y", strtotime($this->post_date));
	}

	function nexPost() {
		return site_url("blog/".($this->id+1));
	}

	function previousPost() {
		return site_url("blog/".($this->id-1));
	}

	public function getMagicPagination($currentPage) {
		
		if($this->total < $this->ITENS_PAGE){
			return;
		}

		$pagionation = "<ul class='pagination'> ";
		
		if($this->page > 1) {
			$pagionation .= "<li><a href='".$this->creatLink($this->page-1)."'> < </a></li>";
		}
   		
   		for ($i=0; $i <= round($this->total/$this->ITENS_PAGE) ; $i++) { 
   			$current = ($i == $currentPage) ? "active" : "";
   			$pagionation .= "<li class='{$current}'><a href='".$this->creatLink($i)."'>".($i+1)."</a></li>";
   		}

   		if($this->page <= round($this->total/$this->ITENS_PAGE)) {
			$pagionation .= "<li><a href='".$this->creatLink($this->page+1)."'> > </a></li>";	
   		}
		$pagionation .= "</ul>";
		return $pagionation;
	}

	function creatLink($page){
		return site_url("blog/index/{$page}");
	}

}

class PostCategoryDto extends Dto {

	var $PATH = "blog/categoria/";

	function getLink(){
		return site_url($this->PATH.url_title(convert_accented_characters($this->title)));
	}
}

/* End of file  */
/* Location: ./application/models/ */