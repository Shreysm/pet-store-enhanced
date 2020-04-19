<?php
      class LoginClient extends CI_Controller{

      public function addClient()
      {
        
        $this->load->library('form_validation');

       
       
        $this->form_validation->set_rules('petname', 'PetName', 'required',array('required' => 'You must provide a  %s !'));
        

        if ($this->form_validation->run()) 
          {
            
           
           $this->load->model("businessModel");
            $data1=array( 
              "clientname" =>$this->input->post("clientname"),
              "mypet" => $this->input->post("petname")
             );
            $this->businessModel->insert_client($data1);
            redirect("/LoginClient/success");
           
          
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
        $this->load->view('loginClient');
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