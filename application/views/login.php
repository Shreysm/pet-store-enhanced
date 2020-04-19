
<div class="columnright">

<img src="<?php echo base_url();?>images\petimage.png" style=" height:300px;width:100%">
<div class="cr2" >
<h2>Login</h2>
Required Information is marked with an asterisk (*).

	<form method="POST" action="<?php echo base_url();?>index.php/login/validateUser">

	<table>    
		<tr>
			<td>* E-mail:</td>
			<td><?php echo form_input(array('id'=>'email','name'=>'email'));?></td>
			
		</tr>
		<span class="error"><?php echo form_error('email');?></span>
		<tr>
			<td>* Password:</td>
			<td><?php echo form_password(array('id'=>'password','name'=>'password'));?></td>
			
		</tr>
		<span class="error"><?php echo form_error('password');?></span>
		
		<tr>
			<td><?php echo form_submit(array('id'=>'submit','value'=>'Submit')); 
             ?> </td>
		</tr>
		
	</table>
	
	<span class="error">
	<?php
	 if($this->uri->segment(2)=="error"){
			echo "Invalid Credentials!!";
		}?>
	</span>
	</form>
	<!--<?php echo form_close(); ?>--> 

