function validation()
{
    var itemName = document.addItemForm.itemName.value;
    if(itemName==""||itemName==null)
    {
        alert("Please Enter the name of the item");
        return false;
    }
    var category = document.addItemForm.category.value;
    if(category=="Select Category")
    {
        alert("Please Select A category");
        return false;
    }
    var price = document.addItemForm.price.value;
    if(price==""||price==null)
    {
        alert("Please Enter the price");
        return false;
    }
    if(price.match(/^[a-zA-Z]^/))
    {
        alert("Price should be numeric value");
        return false;
    }
    else
    {
        alert("Menu Been Added");
    }
}