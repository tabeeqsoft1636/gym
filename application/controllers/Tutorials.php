<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorials extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        check_admin();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $data['title'] = 'Tutorials';
        $user_id = $this->session->userdata('user_id');

        $data['exercise_tutorials'] = $this->common_model->select_where('*', 'exercise_tutorials', array('status' => 1));
        $var['content'] = $this->load->view('tutorials/tutorial_list', $data, true);
        $this->load->view('template2023', $var);
    }

  
    public function addTutorial()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Add Exercise Tutorial';
            $var['content'] = $this->load->view('tutorials/add_tutorial', $data, true);
            $this->load->view('template2023', $var);
        } else {
            $data = $this->input->post();
            $is_created =  $this->common_model->insert_array('exercise_tutorials', $data);
            if ($is_created) {
                $this->session->set_userdata('msg', 'Tutorial added Successfully.');
                redirect('tutorials');
            } else {
                $this->session->set_userdata('msg', 'Tutorial not added');
                redirect('add-tutorial');
            }
        }
    }
    public function editTutorial()
    {
        $data['title'] = 'Edit Workout';
        $var['content'] = $this->load->view('tutorials/add_tutorial', $data, true);
        $this->load->view('template2023', $var);
    }
    public function update()
    {
        $data['title'] = 'Update';
        $var['content'] = $this->load->view('tutorials/update_tutorial', $data, true);
        $this->load->view('template2023', $var);
    }

    public function deleteSingleLead()
    {
        $id = $_POST['id'];
        $query2 =  $this->admin_model->delete_where(array('id' => $id), 'leads');

        if ($query2) {
            echo json_encode(array('success' => 'success', 'msg' => 'Lead Deleted Successfully'));
        } else {
            echo json_encode(array('failed' => 'failed', 'msg' => 'Not Deleted'));
        }
    }
}
