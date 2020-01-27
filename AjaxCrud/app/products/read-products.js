$(document).ready(function(){
 
    // show list of product on first load
    showProducts();

    // when a 'read products' button was clicked
    $(document).on('click', '.read-products-button', function(){
        showProducts();
    });
 
});
 
// function to show list of products
function showProducts(){
    // get list of products from the API
    $.getJSON("http://localhost/Desarrollo-Web-Servidor/SimpleRestAPI/api/product/read.php", function(data){
    
    });
}