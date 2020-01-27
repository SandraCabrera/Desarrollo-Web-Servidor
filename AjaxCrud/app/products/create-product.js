$(document).ready(function(){
 
    // show html form when 'create product' button was clicked
    $(document).on('click', '.create-product-button', function(){
        // load list of categories
        $.getJSON("http://localhost/Desarrollo-Web-Servidor/SimpleRestAPI/api/product/read.php", function(data){
        
        });
    });
 
    // 'create product form' handle will be here
});