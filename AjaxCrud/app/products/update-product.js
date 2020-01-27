$(document).ready(function(){
 
    // show html form when 'update product' button was clicked
    $(document).on('click', '.update-product-button', function(){
        // get product id
        var id = $(this).attr('data-id');

        // read one record based on given product id
        $.getJSON("http://localhost/api/product/read_one.php?id=" + id, function(data){
        
            // values will be used to fill out our form
            var name = data.name;
            var price = data.price;
            var description = data.description;
            var category_id = data.category_id;
            var category_name = data.category_name;
            
            // load list of categories
            $.getJSON("http://localhost/api/category/read.php", function(data){
            
                // build 'categories option' html
                // loop through returned list of data
                    var categories_options_html=`<select name='category_id' class='form-control'>`;
            
                    $.each(data.records, function(key, val){
                        // pre-select option is category id is the same
                        if(val.id==category_id){ categories_options_html+=`<option value='` + val.id + `' selected>` + val.name + `</option>`; }
            
                        else{ categories_options_html+=`<option value='` + val.id + `'>` + val.name + `</option>`; }
                    });
                    categories_options_html+=`</select>`;
                
                // update product html will be here
            });
        });
    });
     
    // 'update product form' submit handle will be here
});