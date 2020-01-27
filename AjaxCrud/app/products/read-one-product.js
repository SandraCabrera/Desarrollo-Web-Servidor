$(document).ready(function(){
 
    // handle 'read one' button click
    $(document).on('click', '.read-one-product-button', function(){
        // get product id
        var id = $(this).attr('data-id');
    });

    // read product record based on given ID
    $.getJSON("http://localhost/Desarrollo-Web-Servidor/SimpleRestAPI/api/product/read_one.php?id=" + id, function(data){
        // start html
        var read_one_product_html=`
        
        <!-- when clicked, it will show the product's list -->
        <div id='read-products' class='btn btn-primary pull-right m-b-15px read-products-button'>
            <span class='glyphicon glyphicon-list'></span> Read Products
        </div>
    });
 
});