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
        // html for listing products
        var read_products_html=`
        <!-- when clicked, it will load the create product form -->
        <div id='create-product' class='btn btn-primary pull-right m-b-15px create-product-button'>
            <span class='glyphicon glyphicon-plus'></span> Create Product
        </div>

        <!-- start table -->
        <table class='table table-bordered table-hover'>
        
            <!-- creating our table heading -->
            <tr>
                <th class='w-25-pct'>Name</th>
                <th class='w-10-pct'>Price</th>
                <th class='w-15-pct'>Category</th>
                <th class='w-25-pct text-align-center'>Action</th>
            </tr>`;
            
            // rows will be here
        
        // end table
        read_products_html+=`</table>`;
    });
}