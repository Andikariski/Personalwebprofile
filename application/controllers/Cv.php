<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
    }


    public function index()
    {
        $data['project'] = $this->Admin_model->getDataWebsite();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
