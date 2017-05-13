function test(){
	if(checkName()==true && checkEmail()==true && checkContact()==true && checkPassword()==true && checkText()==true){
		return true;
	}
	else 
	{
		
		return false;
	}
}

function checkName() {	
				
		var ck_name = /^[A-Za-z ]{5,20}$/;
				var name = document.getElementById("uname").value;

				if(!ck_name.test(name)){
					if(name.length<5){		
					document.getElementById("usname").innerHTML = "name must be 5 characters long.!";
					   
						return false;
					}
					else if(!(/^[A-Za-z]$/).test(name)){

						
				document.getElementById("usname").innerHTML = "Use Only Alphabits.!";	
					  
							
						return false;
					}
				}
				else {
					document.getElementById("usname").innerHTML = "";
					
					return true;

				}
					
}

function checkEmail(){
				
	var ck_email=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
					var name = document.getElementById("email").value;
					
					if(!ck_email.test(name)){
						
						var a=document.getElementById("esname").innerHTML = " Please Enter the Valid Email e.g(hasiib.ahmad@yahoo.com).";
						
						
							return false;
					}
					else{				
						
						document.getElementById("esname").innerHTML = "";
						
						return true;
					}
}
function checkContact(){
		var contactt = document.getElementById("contac").value;
		var con1=/^[0-9]*$/;
			if((!con1.test(contactt)) || (contactt.length)<11){
					if(!con1.test(contactt)){		
						
						document.getElementById("csname").innerHTML = " Please Enter only integers.!";	
						
						return false;
					}else if((contactt.length)<11){
							
						document.getElementById("csname").innerHTML = " Please Enter the required pattern e.g(03451234567)";	
						
						return false;
					}

					}
					else{				
						document.getElementById("contac").style.color ="#06d5f3";
						document.getElementById("csname").innerHTML = "";
						
						return true;
					}
}
function checkPassword(){
	var ck_pass=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,15})$/;
					var password = document.getElementById("pass").value;
					
					if(!ck_pass.test(password)){
							if(password.length<=5){
								
								document.getElementById("pname").innerHTML = " Uh Oh!! very weak password.!";	
								
								return false;
							}
							else if(password.length<=7){
									
									document.getElementById("pname").innerHTML = " Ummm! Medium Password ";	
									
									return false;
							}	
							else if((!(/^[0-9]$/).test(password)) || (!(/^[A-Z]$/).test(password)) || (!(/^[a-z]$/).test(password))){
								document.getElementById("pname").innerHTML = "Uhh!! Password must contain uppercase,Lowercase letters And integers! ";	
								
								return false;

							}
							
					}
					else{				
						
						document.getElementById("pname").innerHTML = "";
						
						return true;
					}
}

