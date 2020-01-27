$(document).ready(function(){
 
    // show html form when 'create product' button was clicked
    $(document).on('click', '.create-product-button', function(){
        // load list of categories
        $.getJSON("http://localhost/Desarrollo-Web-Servidor/SimpleRestAPI/api/product/read.php", function(data){
            // build categories option html
            // loop through returned list of data
            var categories_options_html=`<select name='category_id' class='form-control'>`;
            $.each(data.records, function(key, val){
                categories_options_html+=`<option value='` + val.id + `'>` + val.name + `</option>`;
            });
            categories_options_html+=`</select>`;

            // we have our html form here where product information will be entered
            // we used the 'required' html5 property to prevent empty fields
            var create_product_html=`
            
            <!-- 'read products' button to show list of products -->
            <div id='read-products' class='btn btn-primary pull-right m-b-15px read-products-button'>
                <span class='glyphicon glyphicon-list'></span> Read Products
            </div>
        });
    });
 
    // 'create product form' handle will be here
});