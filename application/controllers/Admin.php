<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('admin_model');
    }

}
