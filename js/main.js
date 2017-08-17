function appendProduct (obj) {
    $('.product-list > .row').append("<div class='col-md-4' data-id='" + obj.id + "'><h2>" + obj.title + "</h2><p>" + obj.price + "</p><p>" + obj.description + "</p><button class='btn btn-success editProduct' data-toggle='modal' data-target='#myModal'>Edit</button>&nbsp; &nbsp;<button class='btn btn-danger removeProduct'>Delete</button></div></div>" );
}
var param = {id1: 1, id: null}
function getProduct() {
    $.get('/factory.php',param , function (res) {
        res = JSON.parse(res);
        $('.product-list > .row > div').remove();
        $.each(res, function (i, obj) {
            appendProduct(obj);
        });
    });
}
getProduct();
$('.newproduct').click(function () {
    
    var product = {
        id: $('.product').val(),
        title: $('#title').val(),
        price: $('#price').val(),
        description: $('#description').val(),
        id1: 2
    };
    
    $.post('/factory.php', product, function (res) {
        getProduct();
        
    });
    
    $('#title').val('');
    $('#price').val('');
    $('#description').val('');
    
    $('#myModal').modal('hide');
});

$('.addProduct').click(function () {
    $('#title').val('');
    $('#price').val('');
    $('#description').val('');
    $('.product').val('');

    $('.newproduct').removeAttr('data-id');
});


$(document).on('click', '.removeProduct' ,function () {
    var itemId = $(this).parent().attr('data-id');

    if(confirm("Вы действительно хотите удалить?")){
        $.post('/delete.php', {id:itemId}, function(res){})
        $(this).parent().remove();
    }
})
    var item = res [0];

    $(document).on('click', '.editProduct' ,function () {
        var itemId = $(this).parent().attr('data-id');
        $('.product').val(itemId);
        $.get('/getproduct.php?id='+itemId, function(res){


            $('#title').val(item.title);
    $('#price').val(item.price);
    $('#description').val(item.description);

    
});
    
    $('.newproduct').attr('data-id', itemId);
});