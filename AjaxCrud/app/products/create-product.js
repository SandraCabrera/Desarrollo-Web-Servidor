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
        });
    });
 
    // 'create product form' handle will be here
});