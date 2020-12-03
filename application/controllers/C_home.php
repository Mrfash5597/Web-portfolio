<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index()
	{
		$this->load->view('V_home');
	}
	
	public function V_portfolio()
	{
		$this->load->view('V_portfolio');
	} 

	public function lakukan_download(){				
		force_download('assets/file/My_CV.pdf',NULL);
	}
}
