<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Technologies extends CI_Controller
{


    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/technologies');
        $this->load->view('includes/footer');
    }
    public function tech_details()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/tech_details');
        $this->load->view('includes/footer');
    }
    public function ml()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/ml');
        $this->load->view('includes/footer');
    }
    public function computer_vision()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/computer_vision');
        $this->load->view('includes/footer');
    }
    public function internet_of_things()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/internet_of_things');
        $this->load->view('includes/footer');
    }
    public function geographic_information_systems()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/gps');
        $this->load->view('includes/footer');
    }

    public function robotic_technology()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/robotic_technology');
        $this->load->view('includes/footer');
    }

    public function drone_technology()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/drone_technology');
        $this->load->view('includes/footer');
    }

    public function three_d_Printing_technology()
    {
        $this->load->view('includes/header');
        $this->load->view('tech/3d_printing');
        $this->load->view('includes/footer');
    }
}
