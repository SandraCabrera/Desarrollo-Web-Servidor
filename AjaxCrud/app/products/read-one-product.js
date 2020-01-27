$(document).ready(function(){
 
    // handle 'read one' button click
    $(document).on('click', '.read-one-product-button', function(){
        // get product id
        var id = $(this).attr('data-id');
    });

    // read product record based on given ID
    $.getJSON("http://localhost/Desarrollo-Web-Servidor/SimpleRestAPI/api/product/read_one.php?id=" + id, function(data){
        // read products button will be here
    });
 
});