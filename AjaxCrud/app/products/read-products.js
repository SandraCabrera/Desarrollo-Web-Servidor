$(document).ready(function(){
 
    // show list of product on first load
    showProducts();

    // when a 'read products' button was clicked
    $(document).on('click', '.read-products-button', function(){
        showProducts();
    });
 
});
 
// showProducts() method will be here