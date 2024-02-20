<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public  function __construct(){
		parent::__Construct();
		check_session();
	}

	public function index()
    {
        $data['title'] = 'Dashboard';

        $data['full_name'] = $this->session->userdata('full_name');
        $var['content'] = $this->load->view('dashboard', $data, true);
        $this->load->view('template2023', $var);
    }
}
