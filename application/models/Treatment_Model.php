<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment_Model extends CI_Model{

	public function __construct() {
		parent::__construct();
	}

	function getByProblem($problem_id) {
		$treatments = $this->db->select('TREATMENTS.*')->
			from("TREATMENTS")->
			join("TREATMENTS_PROBLEMS pf","pf.mngr_token = TREATMENTS.mngr_token")->
			where("pf.PROBLEMS_ID", $problem_id)->
			order_by("ordem","ASC")->get()->result();

		$tratmentDto = new TreatmentDto();
		$tratmentDto->populate($treatments);
		return $tratmentDto;
	}

	function getByToken($token) {
		$treatments = $this->db->get_where('TREATMENTS', array("mngr_token"=>$token))->result();
		$tratmentDto = new TreatmentDto();
		$tratmentDto->populate($treatments);
		return $tratmentDto;
	}

	function getAll() {
		$treatments = $this->db->from('TREATMENTS')->order_by("ordem","ASC")->get()->result();
		$tratmentDto = new TreatmentDto();
		$tratmentDto->populate($treatments);
		return $tratmentDto;
	}

	function getByCategoria($categoria) {
		$tratmentDto = new TreatmentDto();
		$treatments = $this->db->from('TREATMENTS')->where_in("TREATMENTS_CATEGORY_id",array($categoria, $tratmentDto->BOTH))->order_by("ordem","ASC")->get()->result();
		
		$tratmentDto->populate($treatments);
		return $tratmentDto;
	}

	function checkIfSlug($slug_or_id) {
		return !is_numeric($slug_or_id);
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
		$treatment = new TreatmentDto();
		$treatment->populate($this->db->get_where('TREATMENTS', array("id" => $id))->row());
		return $treatment;
	}

	function getBySlug($slug) {
		$treatment = new TreatmentDto();
		$treatment->populate($this->db->get_where('TREATMENTS', array("slug" => $slug))->row());
		return $treatment;
	}

}

class TreatmentDto extends Dto {

	var $PATH = "tratamento";

	var $FACETREATMENT = 1;
	var $BODYTREATMENT = 2;
	var $BOTH = 3;

	var $THUMB_WIDTH = 330;
	var $THUMB_HEIGHT = 260;

	function getImageSize() {
		$size = getimagesize(image_path($this->image));
		return $size[3];
	}

	function hasVideo() {
		return !empty($this->youtube);
	}

	function getEye() {
		return word_limiter(strip_tags($this->descricao), "5");
	}

	function getListingPhoto() {
		return image_path($this->image);
	}

	function getThumb() {
		$image = $this->getImagePriorizing("image_thumb","image");
		return image_path($image);
	}

	function getVideoImage() {
		$image = $this->getImagePriorizing("image_video","image");
		return image_path($image);
	}

	function getImagePriorizing($priorizedImage, $possibleIme) {
		if(!empty($this->$priorizedImage)) {
			return $this->$priorizedImage;
		} else {
			return $this->$possibleImage;
		}
	}

	function getVideoId() {
		parse_str( parse_url( $this->youtube, PHP_URL_QUERY ), $params );
		echo $params['v'];
	}

	function getFaceTReatments() {
		return $this->getThreatmentBycategory($this->FACETREATMENT);
	}

	function getBodyTReatments() {
		return $this->getThreatmentBycategory($this->BODYTREATMENT);
	}

	function getBothTreatments() {
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

}
