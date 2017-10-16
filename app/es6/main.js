console.log('Ready');

const btn_phone = $('.btn--phone');

(function () {
    btn_phone.click(function () {
        $(this).addClass('active');
        $('.more-phones').show();
  });
    $(document).mouseup(function (e) {
        const container = $('.phones');
        if(!container.is(e.target)){
            btn_phone.removeClass('active');
            $('.more-phones').hide();
        }
    });
})();


function tab(container) {
    const Tab = $(`${container} .tab`);
    const Active_tab = $(`${container}  .tab.active`);
    const Content = Active_tab.data('tab');
    $(`#${Content}`).show();
    Tab.click(function () {
        Tab.removeClass('active');
        $(this).addClass('active');
        let content = $(this).data('tab');
        $(`${container} .tab-content`).hide();
        $(`#${content}`).show();
    })
};

tab('.container-tabs');
tab('.container-tabs-2');

//custom select
(function () {
    const Select = $('.custom-select');
    const button = $('.select-btn');
    const Input = Select.find('.select-value');

    button.each(function () {
       $(this).parents('.custom-select').find('input').val($(this).data('value'));
    });

    button.click(function () {
        button.removeClass('active');
        $('.select-options').hide();
        $(this).addClass('active');
         $(this).parents('.custom-select').find('.select-options').show();
    });


    $(document).mouseup(function (e) {
        const container = button;
        if(!container.is(e.target)){
            $('.select-options').hide();
            button.removeClass('active');
        }
    });



    const option = $('.s-option');

    option.click(function () {
        option.removeClass('active');
        $(this).addClass('active');
        let data = $(this).data('value');
        let text = $(this).text();
        $(this).parents('.custom-select').find(button).text(text);
        $(this).parents('.custom-select').find('input').val(data);
        //Input.val(data);
        Select.removeClass('active');
        $('.select-options').hide();
    });


})();




$('.slider-stock').owlCarousel({
    loop:true,
    items:1,
    autoplay:true,
    autoplayTimeout:6000,
    smartSpeed: 1800
});



function SliderReviews() {
    if ($(window).width() < 768){


        function reviews(div,count) {
            let divs = $(`${div} .review`);
            for(let i = 0; i < divs.length; i+=count) {
                divs.slice(i, i+count).wrapAll("<div class='new'></div>");
            }
        }

        reviews('.reviews-main',2);
        reviews('.reviews-product',1);

        $('.reviews').addClass('owl-carousel');
        $('.reviews').owlCarousel({
            loop:true,
            items:1,
            autoplay:false,
            dotes: true,
            autoplayTimeout:6000,
            smartSpeed: 1800
        });
    }
}
SliderReviews();
$(window).resize(function () {
    SliderReviews();
});
$('.btn-mob-menu').click(function () {
    $('#menu').css({
        'left': '0'
    })
    $('html').css('overflow','hidden');
});
$('.btn-close').click(function () {
    $('#menu').css({
        'left': '100%'
    })
    $('html').css('overflow','auto');
});

$('.thumbnails--small').click(function () {
   const img = $(this).find('img').attr('src');
   $('.main-image img').attr('src', img)
});


$('.product__review-star i').click(function () {
   const value = $(this).data('value');
   $('#stars-value').val(value);
    $(`.product__review-star i`).removeClass('fa-star').addClass('fa-star-o');
   for (let i=0 ; i<value; i++){
       $(`.product__review-star i:nth-child(${i+1})`).removeClass('fa-star-o').addClass('fa-star');
   }

});

$('.product__description-read-more').click(function () {
   $(this).hide();
   $('.product__description--hide').show();

});

$('.bnt-show-product-review-form').click(function () {
   $('.product__review-form').show();
   $(this).hide();
});