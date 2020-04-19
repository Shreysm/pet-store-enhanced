<?php
      class LoginBusiness extends CI_Controller{

      public function addBusiness()
      {
        
        $this->load->library('form_validation');

       
       
        $this->form_validation->set_rules('service', 'Service', 'required',array('required' => 'You must provide a  %s !'));
        

        if ($this->form_validation->run()) 
          {
            
           
           $this->load->model("businessModel");
            $data1=array( 
              "bname" =>$this->input->post("bname"),
              "service" => $this->input->post("service")
             );
            $this->businessModel->insert($data1);
            redirect("/LoginBusiness/success");
           
          
          }
          else{
            $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/formfooter');
          }

      }
      public function success(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/loginHeader');
        $this->load->view('business');
        $this->load->view('templates/formfooter');
       }
      public function error(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/formfooter');
       }
    }
?>