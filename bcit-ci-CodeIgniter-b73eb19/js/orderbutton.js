$(".use-address").click(function() {
    var orderarr = [];
    var item = $(this).closest("tr").find(".one").text();
    var category = $(this).closest("tr").find(".two").text();
    var rname = $(this).closest("tr").find(".three").text();
    var price = $(this).closest("tr").find(".four").text();
    // console.log("HI", item);     // Outputs the answer
    orderarr.push(item);
    orderarr.push(category);
    orderarr.push(rname);
    orderarr.push(price);
    // alert(orderarr);
    localStorage.setItem('arra', orderarr);
});