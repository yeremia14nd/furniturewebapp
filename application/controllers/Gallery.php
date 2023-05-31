<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Gallery';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/index');
        $this->load->view('templates/home_footer');
    }

    public function windowsfashion()
    {
        $data['title'] = 'Windows Fashion';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/windowsfashion');
        $this->load->view('templates/home_footer');
    }

    public function shopfront()
    {
        $data['title'] = 'Aluminium Shopfront';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/shopfront');
        $this->load->view('templates/home_footer');
    }

    public function finishedgood()
    {
        $data['title'] = 'Finished Good Aluminium';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/finishedgood');
        $this->load->view('templates/home_footer');
    }

    public function others()
    {
        $data['title'] = 'Other Products';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/others');
        $this->load->view('templates/home_footer');
    }

    public function roller_blinds()
    {
        $data['title'] = 'Roller Blinds';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/roller_blinds');
        $this->load->view('templates/home_footer');
    }

    public function glass_door()
    {
        $data['title'] = 'Glass Door';
        $this->load->view('templates/home_header', $data);
        $this->load->view('gallery/glass_door');
        $this->load->view('templates/home_footer');
    }
}
