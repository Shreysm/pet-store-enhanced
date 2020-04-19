
<div class="columnright">

<img src="<?php echo base_url();?>images\petimage.png" style=" height:300px;width:100%">
<div class="cr2" >
<h2>My Pet</h2>
Required Information is marked with an asterisk (*).

  <form method="POST" action="<?php echo base_url();?>index.php/loginClient/addClient">

  <table>    
    <tr>
      <td>Client Name:</td>
      <td><?php echo form_input(array('id'=>'clientname','name'=>'clientname'));?></td>
      
    </tr>
    <span class="error"><?php echo form_error('clientname');?></span>
    <tr>
      <td>* My Pet:</td>
      <td><?php echo form_input(array('id'=>'petname','name'=>'petname'));?></td>
      
    </tr>
    <span class="error"><?php echo form_error('petname');?></span>
    
    <tr>
      <td><?php echo form_submit(array('id'=>'submit','value'=>'Add New One')); 
             ?> </td>
    </tr>
    
  </table>
  <span class="success">
  <?php
   if($this->uri->segment(2)=="success"){
      echo "New Pet added!!";
    }?>
  </span>
  <span class="error">
  <?php
   if($this->uri->segment(2)=="error"){
      echo "Invalid Credentials!!";
    }?>
  </span>
  </form>
  <!--<?php echo form_close(); ?>--> 

