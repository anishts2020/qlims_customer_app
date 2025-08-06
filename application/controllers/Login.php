<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Common_model','common');
	}

	public function index()
	{
		$this->load->view('home/login');
	}
	
    public function login() {
		$username = $this->input->post('login_name');
		$password = $this->input->post('pwd');
		if($username!=='' && $password!=='') {  
			$check = $this->common->logins($username,$password);
			if(isset($check['cnt'])){
				$session_data = array(	'userid' =>$check['Usr_Id'],
										'username'=>$check['Cu_Name'],
										'logged_in'=>TRUE
									  );
				$this->session->set_userdata($session_data);
				redirect('dashboard'); 
			}
			else {
				$this->session->set_flashdata('message', 'Username/Password is incorrect');
				redirect(base_url());
			}
		}
		else {
			$this->session->set_flashdata('message', 'Username/Password Cannot be null');
			redirect(base_url());
		}
	}
	
}
