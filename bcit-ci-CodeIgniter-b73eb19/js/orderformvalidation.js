function validation()
{
    var name = document.formPlace.customerName.value;
    if(name == null || name == "")
    {
        alert("Please Fill Your Name");
        return false;
    }
    var address = document.formPlace.address.value;
    if(address==null||address=="")
    {
        alert("Please Fill Your Address");
        return false;
    }
    var option1 = document.formPlace.option1.value;
    if(option1 == "Select Your Option")
    {
        alert("Please Select An Option in Preference");
        return false;
    }
    var option2 = document.formPlace.option2.value;
    if(option2 == "Select Option")
    {
        alert("Please Select An Option For Paying");
        return false;
    }
}