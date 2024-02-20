<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Exercises extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        check_admin();
        $this->load->model('admin_model');
    }
    
    public function index()
    {
        $data['title'] = 'Exercises';
        $var['content'] = $this->load->view('exercises/exercise_list', $data, true);
        $this->load->view('template2023', $var);
    }

    public function addExercise()
    {
        $data['title'] = 'Exercises';
        $var['content'] = $this->load->view('exercises/add_exercise', $data, true);
        $this->load->view('template2023', $var);
    }

    public function check_session()
    {
        // Check if the user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        // Check for inactivity timeout (10 minutes)
        $last_activity = $this->session->userdata('last_activity');
        if (time() - $last_activity > 600) {
            $this->session->sess_destroy();
            redirect('login');
        }

        // Update last activity timestamp
        $this->session->set_userdata('last_activity', time());
    }

    public function search2()
    {
        $dateRange = $this->input->post('dateRange');

        // Add your logic to filter data based on the $dateRange
        // This could involve querying a database or any other data source
        $filteredData = $this->your_model->getDataBasedOnDateRange($dateRange);

        // Prepare the response in JSON format
        $response = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => count($filteredData),  // total number of records without filtering
            "recordsFiltered" => count($filteredData),  // total number of records after filtering
            "data" => $filteredData  // data array
        );

        // Send the JSON response back to DataTables
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    // Controller function
    public function search()
    {
        $draw = $this->input->post('draw');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $columnIndex = $this->input->post('order')[0]['column'];
        $columnName = $this->input->post('columns')[$columnIndex]['data'];
        $columnSortOrder = $this->input->post('order')[0]['dir'];
        $searchValue = $this->input->post('search')['value'];

        $searchByFromdate = $this->input->post('searchByFromdate');
        $searchByTodate = $this->input->post('searchByTodate');



        // Total number of records without filtering
        // $totalRecords = $this->common_model->count_reviews_by_quality('reviews');
        $totalRecords = $this->common_model->select_latest_review_by_phone_number_without_filter_count(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
        );

        $totalRecords = $this->common_model->select_latest_review_by_phone_number_without_filter_count(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
        );

        $recordsFiltered = $this->common_model->select_latest_review_by_phone_number_with_filter_count(
            '*',
            'reviews',
            $searchValue,
            $searchByFromdate,
            $searchByTodate,
            'contact_no',
            'id',
            'DESC',
        );
        
        // Search query
        $searchQuery = $this->common_model->buildSearchQuery($searchValue, $searchByFromdate, $searchByTodate);

        $reviews = $this->common_model->select_latest_review_by_phone_number_with_filter(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
            $searchQuery,
            $start,
            $length
        );

        // $reviews = $this->common_model->select_latest_review_by_phone_number_with_filter(
        //     '*',
        //     'reviews',
        //     'contact_no',
        //     'id',
        //     'DESC',
        //     $searchQuery,
        //     $start,
        //     $length
        // );

        // echo "<pre>";
        // print_r($reviews);
        // die;
        // Total number of records with filtering
        // $totalRecordwithFilter = $this->common_model->getTotalRecordsWithFilter($searchQuery);
        $totalRecordwithFilter = count($reviews);
        // die;
        $data = array();

        foreach ($reviews as $row) {
            $timestamp = strtotime($row->checkout_date);
            $formattedDate = date("d-M-Y", $timestamp);

            $data[] = array(
                "customer_name" => $row->customer_name,
                "contact_no" => $row->contact_no,
                "roomId" => $row->roomId,
                "comments" => $row->comments,
                "quality" => $row->quality,
                "timeliness" => $row->timeliness,
                "comfort" => $row->comfort,
                "ambience" => $row->ambience,
                "checkout_date" => $formattedDate,
            );
        }

        // Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $recordsFiltered,
            "data" => $data
        );
        // echo "<pre>";
        // print_r($response);
        // die;

        echo json_encode($response);
        die;
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
            // var_dump($user); // Debug line
            // exit;
            $this->session->set_userdata([
                'logged_in' => true,
                'last_activity' => time(),

            ]);
            // var_dump($this->session->userdata()); // Debug line
            // exit;
            redirect('dashboard');
        } else {
            redirect('login');
        }
    }
}
