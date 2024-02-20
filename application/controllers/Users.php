<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('admin_model');
    }


    public function register()
    {
        $data['title'] = 'Register';
        $this->load->view('register', $data);
    }
    public  function createAccount()
    {
        $data = $this->input->post();
        $data['role'] = 'user';
        $is_created =  $this->common_model->insert_array('users', $data);
        if ($is_created) {
            redirect(base_url('login'));
        } else {
            redirect(base_url('register'));
        }
    }

    public function login()
    {
        $this->load->view('login');
    }



    public function process_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->admin_model->check_login($username, $password);
        if ($user) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'full_name' => $user->name,
                'logged_in' => true,
                'role' => $user->role,
                'last_activity' => time(),
            ]);
            redirect();
        } else {
            redirect('login');
        }
    }
    public function editProfile()
    {
        $user_id = $this->session->userdata('user_id');
        $data['title'] = 'Update Profile';
        $data['userData'] = $this->common_model->select_where_return_row('*', 'users', array('id' => $user_id));

        $var['content'] = $this->load->view('profile/edit_profile', $data, true);
        $this->load->view('template2023', $var);
    }

    public function updateProfile()
    {
        $user_id = $this->session->userdata('user_id');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        if ($this->input->post('password')) {
            $data['password'] = $this->input->post('password');
        }
        $is_updated = $this->common_model->update_array(array('id' => $user_id), 'users', $data);
        if ($is_updated) {
            redirect('edit-profile');
        } else {
            redirect(base_url());
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect(base_url());
    }
}
