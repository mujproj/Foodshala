function validation()
{
    var email = document.CustomerRegistrationForm.emailID.value;
    var password = document.CustomerRegistrationForm.pass.value;
    var confirm_password = document.CustomerRegistrationForm.passagain.value;

    if(email == null || email=="")
    {
        alert("Email can't be blank");  
        return false; 
    }
    if(password.length<6)
    {
        alert("Password Should not be less than 6 characters");
        return false;
    }
    if(password !== confirm_password)
    {
        alert("Passwords Donot Match");
        return false;
    }
}