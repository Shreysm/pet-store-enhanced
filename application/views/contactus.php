
<div class="columnright">

<img src="<?php echo base_url();?>images\petimage2.png" style=" height:300px;width:100%">
<div class="cr2" >
<h2>Contact Us</h2>
Required Information is marked with an asterisk (*).

	<form method="POST" action="<?php echo base_url();?>index.php/contact/addContact">

	<table>
		<tr>
			<td>* First Name:</td>
			<td><?php echo form_input(array('id'=>'first','name'=>'first'));?></td>
			

		</tr>
		<span class="error"><?php echo form_error('first');?></span>
		
		<tr>
			<td>* Last Name:</td>
			<td><?php echo form_input(array('id'=>'last','name'=>'last'));?></td>
			
			
		</tr>
		<span class="error"><?php echo form_error('last');?></span>    
		<tr>
			<td>* E-mail:</td>
			<td><?php echo form_input(array('id'=>'email','name'=>'email'));?></td>
			
		</tr>
		<span class="error"><?php echo form_error('email');?></span>
		<tr>
			<td>Phone:</td>
			<td><?php echo form_input(array('id'=>'phone','name'=>'phone'));?></td>
			
		</tr>
		<span class="error"><?php echo form_error('phone');?></span>
		<tr>
			<td>* Comments:</td>
			<td><?php echo form_textarea(array('id'=>'comments','name'=>'comments','rows'=>2,'cols'=>20));?></td>
			
		</tr>
		<span class="error"><?php echo form_error('comments');?></span>
		<tr>
			<td><?php echo form_submit(array('id'=>'submit','value'=>'Submit')); 
             ?> </td>
		</tr>
		
	</table>
	   <span class="success">
	<?php
	 if($this->uri->segment(2)=="success"){
			echo "We recorded your details,PetStore would contact you soon.";
		}?>
	</span>
	
	</form>
	<!--<?php echo form_close(); ?>--> 

