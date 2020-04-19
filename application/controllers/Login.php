<?php
      class Login extends CI_Controller{
      public function log()
      {
        $this->load->helper(array('url','form'));

        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/formfooter');
      }

      public function validateUser()
      {
        
        $this->load->library('form_validation');

       
        $this->form_validation->set_rules("email","E-mail",'required|valid_email',array('required' => 'You must provide a %s !'));
        $this->form_validation->set_rules('password', 'Password', 'required',array('required' => 'You must provide a  %s !'));
        

        if ($this->form_validation->run()) 
          {
            
           
            $email=$this->input->post("email");
            $pwd=$this->input->post("password");
            $sql = $this->db->query("SELECT roleid,password FROM user WHERE email='$email'");
            $query = $sql->result();
      
            $roleid = 0;
            $password="";
            foreach($query as $row){
                
                    
                    $roleid = $row->roleid;
                    $password = $row->password;
                    break;
              
            }
             
            if ( $roleid == 1 && $pwd == $password){
              $this->load->view('templates/loginHeader');
              $this->load->view('business');
              $this->load->view('templates/formfooter');
            }
            else if ( $roleid == 2 && $pwd == $password){
              $this->load->view('templates/loginHeader');
              $this->load->view('loginClient');
              $this->load->view('templates/formfooter');
            }
            else{
              redirect("/Login/error");
            }
          
          }
          else{
            $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/formfooter');
          }

      }

      public function error(){
           $this->load->helper(array('url','form'));
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/formfooter');
       }
    }
?>