<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problems_Model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

	function listing() {
		$problems = new ProblemDto();
		$problems->populate($this->db->from('PROBLEMS')->order_by("order")->get()->result());
		return $problems;
	}

	function related($mngr_token) {
		$related_problems = $this->db->
		select("PROBLEMS.*")->
		from("PROBLEMS")->
		join("TREATMENTS_PROBLEMS", "TREATMENTS_PROBLEMS.PROBLEMS_id = PROBLEMS.id")->
		where("TREATMENTS_PROBLEMS.mngr_token", $mngr_token)->get()->result();

		$problems = new ProblemDto();
		$problems->populate($related_problems);
		return $problems;
	}

	function getAll() {
		$problems = $this->db->from('PROBLEMS')->order_by("order","ASC")->get()->result();
		$problemDto = new ProblemDto();
		$problemDto->populate($problems);
		return $problemDto;
	}

	function detail($slug_or_id) {
		return $this->loadBySlugOrId($slug_or_id);
	}

	function loadBySlugOrId($slug_or_id) {
		$is_slug = $this->checkIfSlug($slug_or_id);
		if($is_slug) {
			return $this->getBySlug($slug_or_id);
		} else {
			return $this->getById($slug_or_id);
		}
	}

	function checkIfSlug($slug_or_id) {
		return !is_numeric($slug_or_id);
	}

	function getById($id) {
		$problems = new ProblemDto();
		$problems->populate($this->db->get_where('PROBLEMS', array("id" => $id))->row());
		return $problems;
	}

	function getBySlug($slug) {
		$problems = new ProblemDto();
		$problems->populate($this->db->get_where('PROBLEMS', array("slug" => $slug))->row());
		return $problems;
	}

}

class ProblemDto extends Dto {

	var $PATH = "problemas";
	var $FACETREATMENT = 1;
	var $BODYTREATMENT = 2;
	var $BOTH = 3;

	function getFaceProblems() {
		return $this->getThreatmentBycategory($this->FACETREATMENT);
	}

	function getBodyProblems() {
		return $this->getThreatmentBycategory($this->BODYTREATMENT);
	}

	function getBothProblems() {
		return $this->getThreatmentBycategory($this->BOTH);
	}

	function getThreatmentBycategory($category) {
		$result = array();
		foreach ($this->list as $treatment) {
			if(in_array($treatment->TREATMENTS_CATEGORY_id, array($category))) {
				$result[] = $treatment;
			}
		}
		return $result;
	}

	function hasVideo() {
		return !empty($this->youtube);
	}

	function getInvertedTitle() {
		$html_title = "";

		$titleArr = explode(" ",$this->title);
		for($i = 0; $i < count($titleArr); $i++) {
			if($i==0) {
				$html_title .= "<span>".$titleArr[$i]."</span>";
			}else {
				$html_title .= " ".$titleArr[$i];
			}
		}
		return $html_title;
	}

 	function getTitle() {
		$html_title = "";

		$titleArr = explode(" ",$this->title);
		for($i = 0; $i < count($titleArr); $i++) {
			if($i==1) {
				$html_title .= "<span>";
			}
			$html_title .= " ".$titleArr[$i];
		}
		$html_title .= "</span>";
		return $html_title;
	}

	function getListingPhoto() {
		$image = $this->getImagePriorizing("image_listing", "image_detail");
		return image_path($image);
	}

	function getDetailPhoto() {
		$image = $this->getImagePriorizing("image_detail","image_listing");
		return image_path($image);
	}

	function getVideoId() {
		parse_str( parse_url( $this->youtube, PHP_URL_QUERY ), $params );
		echo $params['v'];
	}

	function getImagePriorizing($priorizedImage, $possibleImage) {
		if(!empty($this->$priorizedImage)) {
			return $this->$priorizedImage;
		} else {
			return $this->$possibleImage;
		}
	}

}
