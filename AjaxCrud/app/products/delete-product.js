$(document).ready(function(){
 
    // will run if the delete button was clicked
    $(document).on('click', '.delete-product-button', function(){
        // get the product id
        var product_id = $(this).attr('data-id');

        // bootbox for good looking 'confirm pop up'
        bootbox.confirm({
        
            message: "<h4>Are you sure?</h4>",
            buttons: {
                confirm: {
                    label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                    className: 'btn-danger'
                },
                cancel: {
                    label: '<span class="glyphicon glyphicon-remove"></span> No',
                    className: 'btn-primary'
                }
            },
            callback: function (result) {
                // delete request will be here
            }
        });
    });
});