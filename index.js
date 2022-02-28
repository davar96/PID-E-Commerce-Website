$(document).ready(function(e) {

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // New phones owlCarousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // News owlCarousel
    $("#news .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // Product quantity section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");


    // Click on quantity up button
    $qty_up.click(function(e) {

        let $input = $(`.qty_input[data-id='${$(this).data('id')}']`);
        let $price = $(`.product_price[data-id='${$(this).data('id')}']`);

        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php",
            type: 'post',
            data: { itemid: $(this).data("id") },
            success: function(result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() <= 10) {
                    $input.val(function(i, oldval) {
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    //set subTotal price
                    let subTotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subTotal.toFixed(2));
                }
            }
        }); //closing ajax request
    });

    // Click on quantity down button
    $qty_down.click(function(e) {
        let $input = $(`.qty_input[data-id='${$(this).data('id')}']`);
        let $price = $(`.product_price[data-id='${$(this).data('id')}']`);


        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php",
            type: 'post',
            data: { itemid: $(this).data("id") },
            success: function(result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function(i, oldval) {
                        return --oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    //set subTotal price
                    let subTotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subTotal.toFixed(2));


                }
            }
        }); //closing ajax request


    });

    //image uploading
    let $uploadfile = $('#register .upload-profile-image input[type="file"]');

    $uploadfile.change(function() {
        readURL(this);
    });

    // password checking
    $("#reg-form").submit(function(e) {
        let $password = $("#password");
        let $confirm = $("#confirm_pwd");
        let $error = $("#confirm_error");

        if ($password.val() === $confirm.val()) {
            return true;
        } else {
            $error.text("Le MDP ne correspond pas");
            event.preventDefault();
        }
    });
});

//image uploading
function readURL(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $("#register .upload-profile-image .img").attr("src", e.target.result);
            $("#register .upload-profile-image .camera-icon").css({ display: "none" });
        }
        reader.readAsDataURL(input.files[0]);
    }
}