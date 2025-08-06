<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		if ($this->session->userdata('logged_in')) {
			$array = array('userid','username','logged_in');
			$this->session->unset_userdata($array);
			$this->session->sess_destroy();
			$this->session->set_flashdata('message', 'You have been successfully logged out!'); 
			redirect(base_url());
		}
	}
}