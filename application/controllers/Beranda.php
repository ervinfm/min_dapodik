<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->template->load('template', 'beranda');
	}
}
