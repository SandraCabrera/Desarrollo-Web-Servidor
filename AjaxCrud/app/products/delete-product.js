$(document).ready(function(){
 
    // will run if the delete button was clicked
    $(document).on('click', '.delete-product-button', function(){
        // get the product id
        var product_id = $(this).attr('data-id');
    });
});