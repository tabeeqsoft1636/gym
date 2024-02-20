<?php
function asset_url()
{
    return base_url() . 'assets/';
}

function check_session()
{
    $cih = &get_instance();
    // Check if the user is logged in
    if (!$cih->session->userdata('logged_in')) {
        redirect('login');
    }

    // Check for inactivity timeout (10 minutes)
    $last_activity = $cih->session->userdata('last_activity');
    if (time() - $last_activity > 6000) {
        $cih->session->sess_destroy();
        redirect('login');
    }

    // Update last activity timestamp
    $cih->session->set_userdata('last_activity', time());
}
function check_admin()
{
    $cih = &get_instance();
    // Check if the user is logged in
    if (!$cih->session->userdata('role')=='admin') {
        redirect('login');
    }

    // Check for inactivity timeout (10 minutes)
    $last_activity = $cih->session->userdata('last_activity');
    if (time() - $last_activity > 6000) {
        $cih->session->sess_destroy();
        redirect('login');
    }

    // Update last activity timestamp
    $cih->session->set_userdata('last_activity', time());
}