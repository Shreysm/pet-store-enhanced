<?php
      class Client extends CI_Controller{
      public function clients()
      {
        $this->load->helper(array('url','form'));

        $this->load->view('templates/header');
        $this->load->view('client');
        $this->load->view('templates/formfooter');
      }

      public function addClient()
      {
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules("first","FirstName",'required|alpha',array('required' => 'You must provide a %s !','alpha'=> '%s must contain only letters!'));
        $this->form_validation->set_rules("last","LastName",'required|alpha',array('required' => 'You must provide a %s !','alpha'=> '%s must contain only letters !'));
        $this->form_validation->set_rules("email","E-mail",'required|valid_email',array('required' => 'You must provide a %s !'));
        $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]',array('regex_match' => 'You must provide a valid 10 digit %s !'));
        

        if ($this->form_validation->run()) 
          {
            
            $this->load->model("clientModel");
            $data1=array( 
              "email" =>$this->input->post("email"),
              "password" => "wdm123",
              "roleid" => 2
             );
            $this->clientModel->insert_user($data1);
            $email=$this->input->post("email");
            $sql = $this->db->query("SELECT userid FROM user WHERE email='$email'");
            $query = $sql->result();
      
            $userid = 100;
            foreach($query as $row){
                
                    
                    $userid = $row->userid;
                    break;
              
            }
            $data2=array( 
              "userid" =>$userid,
              "fname" =>$this->input->post("first"),
              "lname" =>$this->input->post("last"),
              "phone" =>$this->input->post("phone"),
              "email" =>$this->input->post("email")
             );
            $this->clientModel->insert_client($data2);

             $from_email = "shrey31.sm@gmail.com"; 
             $to_email = $this->input->post('email'); 
       
             //Load email library 
             $this->load->library('email'); 
       
             $this->email->from($from_email, 'Petstore'); 
             $this->email->to($to_email);
             $this->email->subject('Welcome mailer'); 
             $this->email->message('We are pleasure to have you as our client!'); 
       
             
             $this->email->send();  

            redirect("/Client/success");
          }
          else{
            $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('client');
        $this->load->view('templates/formfooter');
          }

      }

      public function success(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('client');
        $this->load->view('templates/formfooter');
       }
    }
?>