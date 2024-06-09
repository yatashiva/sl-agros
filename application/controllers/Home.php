<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('pages/home');
        $this->load->view('includes/footer');
    }
    public function about_us()
    {
        $this->load->view('includes/header');
        $this->load->view('pages/about_us');
        $this->load->view('includes/footer');
    }
    public function gallery()
    {
        $this->load->view('includes/header');
        $this->load->view('pages/gallery');
        // $this->load->view('includes/footer');
    }
}
