	
    function validateForm(){
		var name=document.getElementById("first").value;
		if(name == "" || name == null){
			   
               alert("First Name is required!!");
               name.focus();
		}
		else{
			if(!name.match(/^[a-zA-Z]*$/))
			{
				alert("First Name:Only letters are allowed!!");
				name.focus();
				
			}

		}
		var lname=document.getElementById("last").value;
		if(lname == "" || lname == null){
			   
               alert("Last Name is required!!");
               lname.focus();
               
               
             
		}
		else{
			if(!lname.match(/^[a-zA-Z]*$/))
			{
				alert("Last Name:Only letters are allowed!!");
				lname.focus();
				
			}
			
		}
        
        var email=document.getElementById("email").value;
		if(email == "" || email == null){
			   
               alert("Email is required!!");
               email.focus();
               
               
             
		}
		else{
			if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
			{
				alert("Invalid Email!!");
				email.focus();
				
			}
			
		}

		var phone=document.getElementById("phone").value;
			if(!phone.match(/^[0-9 ]*$/))
			{
				alert("Phone:Only 10 digits allowed!!");
				phone.focus();
				
			}
		var comments=document.getElementById("comments").value;
		if(comments == "" || comments == null){
			   
               alert("Comments are required!!");
               comments.focus();
             
		}
	}


    function validateClientService(){
		var name=document.getElementById("first").value;
		if(name == "" || name == null){
			   
               alert("First Name is required!!");
               name.focus();
		}
		else{
			if(!name.match(/^[a-zA-Z]*$/))
			{
				alert("First Name:Only letters are allowed!!");
				name.focus();
				
			}

		}
		var lname=document.getElementById("last").value;
		if(lname == "" || lname == null){
			   
               alert("Last Name is required!!");
               lname.focus();
               
               
             
		}
		else{
			if(!lname.match(/^[a-zA-Z]*$/))
			{
				alert("Last Name:Only letters are allowed!!");
				lname.focus();
				
			}
			
		}
        
        var email=document.getElementById("email").value;
		if(email == "" || email == null){
			   
               alert("Email is required!!");
               email.focus();
               
               
             
		}
		else{
			if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
			{
				alert("Invalid Email!!");
				email.focus();
				
			}
			
		}

		var phone=document.getElementById("phone").value;
			if(!phone.match(/^[0-9 ]*$/))
			{
				alert("Phone:Only 10 digits allowed!!");
				phone.focus();
				
			}
		
	}

	function validateLogin(){

		var email=document.getElementById("email").value;
		if(email == "" || email == null){
			   
               alert("Email is required!!");
               email.focus();
               
               
             
		}
		else{
			if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
			{
				alert("Invalid Email!!");
				email.focus();
				
			}
			
		}

		var password=document.getElementById("pwd").value;
		if(password == "" || password == null){
			   
               alert("Invalid Password!!");
               password.focus();
             
		}
	}