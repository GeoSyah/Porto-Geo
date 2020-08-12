<?php
defined('BASEPATH') or exit ('No Access Allowed!');

class home extends CI_Controller
{
    function __constuct()
    {
        parent::__constuct();
        $this->load->model('data');
    }

    public function index()
    {
        $data['title'] = 'Geo Syah A';
        $data['identitas'] = $this->data->getData()->result();
        $this->load->helper('html','url');
        $this->load->view('home',$data);
    }
}