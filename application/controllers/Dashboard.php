<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Common_model','common');
		if (!$this->session->userdata('logged_in')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$a_report = $this->common->get_tickets();
		$s_report = $this->common->get_samplereceipts();
		$data['a_report'] = $a_report;
		$data['s_report'] = $s_report;
		$this->load->view('home/dashboard',$data);
	}
	public function analytical_report_form()
    {
        $postData = $this->input->post(); // Get POST data
    	$data = $this->common->analytical_report_form($postData);
    	echo json_encode($data);
    }
}
