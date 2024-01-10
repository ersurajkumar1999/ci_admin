<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/index');
    }
    public function about()
    {
        $this->load->view('home/about');
    }
}
