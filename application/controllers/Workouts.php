<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Workouts extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        check_session();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $data['title'] = 'Workouts Types';

        $user_id = $this->session->userdata('user_id');

        $data['workout_types'] = $this->common_model->select_where('*', 'workout_types', array('status' => 1));
        $var['content'] = $this->load->view('workouts/workout_type_list', $data, true);
        $this->load->view('template2023', $var);
    }

    public function workout()
    {
        $data['title'] = 'Workouts';
        $user_id = $this->session->userdata('user_id');

        $data['workouts'] = $this->common_model->select_where('*', 'workouts', array('status' => 1));
        $var['content'] = $this->load->view('workouts/workout_list', $data, true);
        $this->load->view('template2023', $var);
    }

    public function addWorkoutType()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Add Workout Type';
            $var['content'] = $this->load->view('workouts/add_workout_type', $data, true);
            $this->load->view('template2023', $var);
        } else {
            $data['name'] = $this->input->post('name');
            $is_created =  $this->common_model->insert_array('workout_types', $data);
            if ($is_created) {
                $this->session->set_userdata('msg', 'Workout Type added Successfully.');
                redirect('workout-types');
            } else {
                $this->session->set_userdata('msg', 'Workout Type not added');
                redirect('add-workout-type');
            }
        }
    }

    public function addWorkout()
    {
        // echo "<pre>";
        // print_r($_POST); die;

        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Add Workout';
            $data['workout_types'] = $this->common_model->select_where('*', 'workout_types', array('status' => 1));

            $var['content'] = $this->load->view('workouts/add_workout', $data, true);
            $this->load->view('template2023', $var);
        } else {
            $data = $this->input->post();
            $is_created =  $this->common_model->insert_array('workouts', $data);
            if ($is_created) {
                $this->session->set_userdata('msg', 'Workout added Successfully.');
                redirect('workouts');
            } else {
                $this->session->set_userdata('msg', 'Workout not added');
                redirect('add-workout');
            }
        }
    }
    public function editWorkout()
    {
        $data['title'] = 'Edit Workout';
        $var['content'] = $this->load->view('workouts/add_workout', $data, true);
        $this->load->view('template2023', $var);
    }
    public function update()
    {
        $data['title'] = 'Update';
        $var['content'] = $this->load->view('exercises/add_exercise', $data, true);
        $this->load->view('template2023', $var);
    }
}
