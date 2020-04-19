<?php
      class Contact extends CI_Controller{
      public function contacts()
      {
        $this->load->helper(array('url','form'));

        $this->load->view('templates/header');
        $this->load->view('contactus');
        $this->load->view('templates/formfooter');
      }

      public function addContact()
      {
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules("first","FirstName",'required|alpha',array('required' => 'You must provide a %s !','alpha'=> '%s must contain only letters!'));
        $this->form_validation->set_rules("last","LastName",'required|alpha',array('required' => 'You must provide a %s !','alpha'=> '%s must contain only letters !'));
        $this->form_validation->set_rules("email","E-mail",'required|valid_email',array('required' => 'You must provide a %s !'));
        $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]',array('regex_match' => 'You must provide a valid 10 digit %s !'));
        $this->form_validation->set_rules("comments","Comments",'required',array('required' => 'You must provide a %s !'));

        if ($this->form_validation->run()) 
          {
            
            $this->load->model("contactModel");
            $data=array( 
              "fname" =>$this->input->post("first"),
              "lname" =>$this->input->post("last"),
              "email" =>$this->input->post("email"),
              "phone" =>$this->input->post("phone"),
              "comments" =>$this->input->post("comments")
             );
            $this->contactModel->insert($data);
            redirect("/Contact/success");

            
          }
          else{
            $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('contactus');
        $this->load->view('templates/formfooter');
          }

      }

      public function success(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('contactus');
        $this->load->view('templates/formfooter');
       }
       public function error(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('contactus');
        $this->load->view('templates/formfooter');
       }
    }
?>