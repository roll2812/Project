$('.add-to-cart').click(function() {
    let urlRequest = $(this).data('url');
    $.ajax({
        type: "GET",
        url: urlRequest,
        dataType: 'json',
        success: function(data) {
            if (data.code == 200) {
                Swal.fire(
                    'Product has been added to cart!',
                    'Click below to continue!',
                    'Done'

                )
                $('#cart-count').html(data.cartCount);

            }
        }
    });
});


$('.cart_quantity_up').click(function() {
    let urlRequest = $(this).data('url')
    let that = $(this);
    $.ajax({
        type: "GET",
        url: urlRequest,
        success: function(res) {
            if (res.code == 200) {
                that.parent().find('.cart_quantity_input').val(res.itemQuantity);
                that.parent().parent().parent().find('.cart_total_price').html(res.itemprice);
                $('.cart-count').html(res.cartCount);
                $('.total-price').html(res.cartSubTotal);
            }
        }
    });
});

$('.cart_quantity_down').click(function() {
    let urlRequest = $(this).data('url')
    let that = $(this);
    $.ajax({
        type: "GET",
        url: urlRequest,
        success: function(res) {
            if (res.code == 200) {
                that.parent().find('.cart_quantity_input').val(res.itemQuantity);
                that.parent().parent().parent().find('.cart_total_price').html(res.itemprice);
                $('.cart-count').html(res.cartCount);
                $('.total-price').html(res.cartSubTotal);
            }
        }
    });
});

$('.cart_quantity_delete').click(function() {
    let urlRequest = $(this).attr('href')
    let that = $(this);
    $.ajax({
        type: "GET",
        url: urlRequest,
        success: function(res) {
            if (res.code == 200) {
                that.parent().parent().remove();
                $('#cart-count').html(res.cartCount);
                $('.cart_total_price').html(res.cartSubTotal);
            }
        }
    });
});