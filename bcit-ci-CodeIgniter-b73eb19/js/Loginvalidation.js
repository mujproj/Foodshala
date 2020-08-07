function validateform(){  
var email=document.LoginForm.emailID.value;
var password=document.LoginForm.pass.value;
  
if (email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");
  return false;  
  }  
}