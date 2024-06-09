<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{


    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('services/services');
        $this->load->view('includes/footer');
    }
    public function soil_and_water_health_monitoring()
    {
        $this->load->view('includes/header');
        $this->load->view('services/soil_and_water');
        $this->load->view('includes/footer');
    }
    public function crop_production()
    {
        $this->load->view('includes/header');
        $this->load->view('services/crop_production');
        $this->load->view('includes/footer');
    }
    public function agri_machine_development()
    {
        $this->load->view('includes/header');
        $this->load->view('services/agri_machine_development');
        $this->load->view('includes/footer');
    }
    public function crop_health_monitoring()
    {
        $this->load->view('includes/header');
        $this->load->view('services/crop_health_monitoring');
        $this->load->view('includes/footer');
    }
    public function crop_harvesting()
    {
        $this->load->view('includes/header');
        $this->load->view('services/crop_harvesting');
        $this->load->view('includes/footer');
    }
    public function post_harvesting()
    {
        $this->load->view('includes/header');
        $this->load->view('services/post_harvesting');
        $this->load->view('includes/footer');
    }
    public function pre_and_final_food_processing()
    {
        $this->load->view('includes/header');
        $this->load->view('services/final_food_processing');
        $this->load->view('includes/footer');
    }
}
