function validation()
{
    var email = document.RestaurantRegistrationForm.emailID.value;
    var password = document.RestaurantRegistrationForm.pass.value;
    var confirm_password = document.RestaurantRegistrationForm.passagain.value;

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