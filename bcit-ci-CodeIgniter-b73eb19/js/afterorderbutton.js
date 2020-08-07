var ordarr = localStorage.getItem('arra');
// alert(ordarr);
// console.log(typeof(ordarr));
var arr = ordarr.split(',');
document.getElementById('itemName').value = arr[0];
document.getElementById('rName').value = arr[2];
document.getElementById('categroy').value = arr[1];
document.getElementById('price').value = arr[3];

$(document).ready(function(){
    var $form = $('#formPlace');
    $form.submit(function(){
        alert("Order Has Been Placed");
    })
})