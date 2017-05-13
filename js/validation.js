			

			var nameCheck=/^[A-Za-z_ ]{3,30}$/;
			var emailCheck=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
			var adressCheck=/^[A-Za-z 0-9]{3,20}$/;
            var fnameCheck=/^[A-Za-z \s]{3,20}$/;

			function validateName(){
				
				var name= document.getElementById("name").value;

				if(name==""){

					document.getElementById("nameError").style.display=='block';
					document.getElementById("nameError").innerHTML = "Fillout Name Field.";
					document.getElementById("nameError").style.color ="red";	
					return false;
				}

				else{
					if(!nameCheck.test(name)){
						document.getElementById("nameError").style.display=='block';
						document.getElementById("nameError").innerHTML = "*Enter the Valid Name. Use Only Alphabits.";	
						document.getElementById("nameError").style.color ="red";
						return false;
					}
					else{				
						document.getElementById("nameError").innerHTML = "";
						return true;
					}	
				}
			} 



			
			


			function validatePassword(){
				var password= document.getElementById("password").value;

				if(password==""){
					document.getElementById("passwordError").style.display=='block';
					document.getElementById("passwordError").innerHTML = "*Please Fillout  password Field.";	
					document.getElementById("passwordError").style.color ="red";
					return false;
				}

				else{

						if(!(password.length >5 && password.length <20) ){
							document.getElementById("passwordError").style.display=='block';
							document.getElementById("passwordError").innerHTML = "*Please Enter the Valid password. ";	
							document.getElementById("passwordError").style.color ="red";
							return false;
						}
						else{				
							document.getElementById("passwordError").innerHTML = "";
							return true;
						}	
				}

			}
			function validateEmail(){
				
				var email= document.getElementById("email").value;

				if(email==""){
					document.getElementById("emailError").style.display=='block';
					document.getElementById("emailError").innerHTML = "*Please Fillout No of Email Field.";	
					document.getElementById("emailError").style.color ="red";
					return false;
				}

				else{

						if(!emailCheck.test(email)){
							document.getElementById("emailError").style.display=='block';
							document.getElementById("emailError").innerHTML = "*Please Enter the Valid Email. ";	
							document.getElementById("emailError").style.color ="red";
							return false;
						}
						else{				
							
							document.getElementById("emailError").innerHTML = "";
							return true;
						}	
				}

			}


			function validateAdress(){
				
				var address= document.getElementById("address").value;

				if(address==""){

					document.getElementById("addressError").style.display=='block';
					document.getElementById("addressError").innerHTML = "*Fillout Address Field.";	
					document.getElementById("addressError").style.color ="red";

					return false;
				}

				else{
					if(!adressCheck.test(address)){
						document.getElementById("addressError").style.display=='block';
						document.getElementById("addressError").innerHTML = "*Enter the Valid Address.";	
						document.getElementById("addressError").style.color ="red";
						return false;
					}
					else{				
						document.getElementById("addressError").innerHTML = "";
						return true;
					}	
				}
			} 


			function validateFname(){
				
				var fname= document.getElementById("fname").value;

				if(fname==""){
					document.getElementById("fnameError").style.display=='block';
					document.getElementById("fnameError").innerHTML = "*Please Fillout Full name Field.";	
					document.getElementById("fnameError").style.color ="red";
					return false;
				}

				else{

						if(!fnameCheck.test(fname)){
							document.getElementById("fnameError").style.display=='block';
							document.getElementById("fnameError").innerHTML = "*Please Enter the Valid Full Name. ";	
							document.getElementById("fnameError").style.color ="red";
							return false;
						}
						else{				
							
							document.getElementById("fnameError").innerHTML = "";
							return true;
						}	
				}

			}


			/*
			
			function validateMobile(){
				var mobile= document.getElementById("mobile").value;

				if(mobile==""){
					document.getElementById("mobileError").style.display=='block';
					document.getElementById("mobileError").innerHTML = "Please Fillout No of Mobile Field.";	
					document.getElementById("mobileError").style.color ="red";
					return false;
				}

				else{


						if(!mobileCheck.test(mobile)){
							document.getElementById("mobileError").style.display=='block';
							document.getElementById("mobileError").innerHTML = "Please Enter the Valid Mobile Name. Use Only digits.";	
							document.getElementById("mobileError").style.color ="red";
							return false;
						}
						else{			
							document.getElementById("mobileError").innerHTML = "";
							return true;
						}
				}
				
			}
*/
		

			function signUpValidate(){
					var nameReturn= validateName();
					var emailReturn= validateEmail();
					var passwordReturn= validatePassword();
					var AdressReturn= validateAdress();
					var FullnameReturn= validateFname();
				/*	if(nameReturn ==true && emailReturn == true && passwordReturn ==true && mobileReturn == true){
						alert("true");
						return true;
						
					}
					else{
						alert("truefalse");
						return false;
					}*/



						if(nameReturn==true)
						{
							if(emailReturn==true)
							{
								if(passwordReturn==true)
								{
									if(AdressReturn==true)
									{
										if(FullnameReturn==true)
										{
											
											return true;
										}
											
										return false;
									}
									
									return false;
								}
									
								return false;
							}
								
							return false; 
						}
						
						return false;	  

				}
			


		/*	function logInValidate(){
				var nameReturn= validateName();
				var passwordReturn= validatePassword();

					
						if(nameReturn==true){
							if(passwordReturn==true){
									
								return true;
							}
								
							return false;
						}
							
						return false;

			} */

