<?php
      class Pethome extends CI_Controller{
      public function index()
      {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
      }
      public function about()
      {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('Aboutus');
        $this->load->view('templates/footer');
      }
    }
?>