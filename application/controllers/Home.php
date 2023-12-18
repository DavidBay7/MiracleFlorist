<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('home_view');
        $this->load->view('templates/footer');
    }
}