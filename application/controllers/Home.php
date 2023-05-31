<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/home_footer');
    }

    public function services()
    {
        $data['title'] = 'Services';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/services');
        $this->load->view('templates/home_footer');
    }

    public function about()
    {
        $data['title'] = 'About';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/about');
        $this->load->view('templates/home_footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/contact');
        $this->load->view('templates/home_footer');
    }
}
