<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('templates/header_admin');
        $this->load->view('admin', $data);
        $this->load->view('templates/footer');
    }

    public function hapusDataProject($id)
    {
        $this->Admin_model->hapusDataProject($id);
        $this->session->set_flashdata('flash-hapus', 'Di Hapus');
        redirect('Adminxxauth');
    }

    public function tambahPeoject()
    {
        $data = [
            "header" => $this->input->post('header'),
            "footer" => $this->input->post('footer')
        ];

        $upload_image = $_FILES['img']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';
            $config['upload_path'] = './assets/img';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $upload_image = $this->upload->data('file_name');
                $this->db->set('img', $upload_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('project', $data);
        redirect('Adminxxauth');
    }
}
