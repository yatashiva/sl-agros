<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{


    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('pages/contact_us');
        $this->load->view('includes/footer');
    }
}
