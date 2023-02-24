<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SEMMEL</title>
</head>
<body>
<style>
@font-face {
font-family: "CinzelDecorative";
src: url("/fonts/CinzelDecorative-Regular.ttf");
}
body{
    font-family: serif;
}
main{
    color: #dadbdd;
    min-height: calc(100vh);
    display: flex;
    align-items: center;
}
#header{
    background-color: black;
}
#header *{
    /*filter: brightness(0) saturate(100%) invert(95%) sepia(4%) saturate(89%) hue-rotate(182deg) brightness(110%) contrast(85%);*/
}
.product-list{
    transition: all ease-in 300ms;
}
.product-card{
    transition: all linear 200ms;
    padding: 10px;
    flex-grow:1;
    flex-basis: 30%;
}
.product-card .img{
    width: 25vw;
    margin: 20px auto;
}
.product-card .video{
    width: 25vw;
    margin: 20px auto;
    /*border: white 2px solid;*/
}
.product-card img{
    margin: 0px auto;
}
.product-card video{
    margin: 0px auto;
    min-width: 100%;
    min-height: 100%;
}
@media only screen and (max-width: 1000px) {
    .product-card .img{
        width: 50vw;
    }
    .product-card .video{
        width: 50vw;
    }
    .product-list{
        transform: translateX(0px) !important;
    }
}
#lang-globe{
    display: none;
}

.video{
    display:none;
}

.btn-buy{
    filter: drop-shadow(0 0 0.75rem white);
    text-shadow: 0px 0px 2px white;
    transition: all 200ms linear;
}
.btn-buy:hover{
    text-shadow: 0px 0px 4px white;
}
#header-nav{
    display: none;
}
.product-card:hover .img{
    display:none;
}
.product-card:hover .video{
    display:block;
}


</style>
    <header id="header" class="fixed bg-stone-100 w-full z-50">
        <div class="flex flex-col items-center justify-between">
            <div id="header-logo" class="grow flex w-full relative">
                <a href="/" class="grow flex justify-center items-center">
                    <img src="img/logo.png" alt="SEMMEL logo" class="w-48" style="filter: brightness(0) saturate(100%) invert(95%) sepia(4%) saturate(89%) hue-rotate(182deg) brightness(110%) contrast(85%);">
                </a>
                {{-- <div id="lang-globe" class="absolute right-0 top-0">
                    <button id="dropdown" data-dropdown-toggle="dropdown_lang" class="font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><img src="img/globe.png" width="24" height="24" alt=""></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown_lang" class="absolute right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="/lang/Italiano" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Italiano</a>
                        </li>
                        <li>
                            <a href="/lang/en" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
                        </li>
                        </ul>
                    </div>

                </div> --}}
                <div style="position:absolute; right:0px; bottom:0px; margin:5px">
                    <div class="flex items-center">
                        <a href="/cart" class="uppercase tracking-widest font-sans font-thin text-sm text-white hidden md:visible">Shopping Bag</a>
                        <button href="/cart" id="mini-cart-open"><img src="/img/bucket.png" alt="bucket/cart" width="50"></button>
                    </div>
                </div>
            </div>
            <nav id="header-nav" class="flex items-center grow mx-4 relative w-1/2 py-1">
                <ul class="flex items-center flex-row w-1/3 mx-auto justify-center">
                    <li><a href="/store" ><img style="height:35px; margin: auto 10px" src="/img/S.png" alt=""></a></li>
                    <li><a href="/refill" ><img style="height:35px; margin: auto 10px" src="/img/alchemy.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </header>
        
        <main class="font-thin bg-black py-5 w-full">
            <div class="flex flex-col lg:flex-row items-center w-full product-list">
                <div class="mx-2 text-center product-card cursor-pointer">
                    <div>
                    </div>
                    <div class="img w-2/3 mx-auto my-3"><img src="/img/silver-done.png" alt=""></div>
                    <div class="video w-2/3 mx-auto my-3">
                        <video loop autoplay muted playsinline id="vid">
                            <source type="video/mp4" src="/video/silver.mp4"/>
                        <video>
                    </div>
                    <h2 class="text-xl">Silver Moon</h2>
                    <h2 class="text-xl opacity-80">€{{$prices["silver"]["unit_amount"]/100}}</h2>
                    <form action="/cart" method="post">
                        @csrf
                        <input type="hidden" name="product" value="silver">
                        <button class="btn-buy px-4 py-2 hover:scale-105 transition-all" type="button" data-slug="silver">BUY NOW</button>
                    </form>
                </div>
                <div class="mx-2 text-center product-card cursor-pointer">
                    <div>
                    </div>
                    <div class="img w-2/3 mx-auto my-3"><img src="/img/gold-done.png" alt=""></div>
                    <div class="video w-2/3 mx-auto my-3">
                        <video loop autoplay muted playsinline id="vid">
                            <source type="video/mp4" src="/video/pink.mp4"/>
                        <video>
                    </div>
                    <h2 class="text-xl">Gold Nebulae</h2>
                    <h2 class="text-xl opacity-80">€{{$prices["gold"]["unit_amount"]/100}}</h2>
                    <form action="/cart" method="post">
                        @csrf
                        <input type="hidden" name="product" value="gold">
                        <button class="btn-buy px-4 py-2 hover:scale-105 transition-all" type="button" data-slug="gold">BUY NOW</button>
                    </form>
                </div>
                <div class="mx-2 text-center product-card cursor-pointer">
                    <div>
                    </div>
                    <div class="img w-2/3 mx-auto my-3"><img src="/img/black-done.png" alt=""></div>
                    <div class="video w-2/3 mx-auto my-3">
                        <video loop autoplay muted playsinline id="vid">
                            <source type="video/mp4" src="/video/black.mp4"/>
                        <video>
                    </div>
                    <h2 class="text-xl">Black Aether</h2>
                    <h2 class="text-xl opacity-80">€{{$prices["black"]["unit_amount"]/100}}</h2>
                    <form action="/cart" method="post">
                        @csrf
                        <input type="hidden" name="product" value="black">
                        <button class="btn-buy px-4 py-2 hover:scale-105 transition-all" type="button" data-slug="black">BUY NOW</button>
                    </form>
                </div>
            </div>
        </main>
        @include('mini-cart-partial')
<section style="max-height:0px; transition: all linear 400ms; overflow-y: hidden;" class="contact-section bg-white pt-0">
            <div>
                <p class="text-xl my-4">If you have questions, comments or concerns regarding our products please don't hesitate to send us an e-mail to <a href="mailto:info@semmel.store" class="font-bold hover:text-slate-500">info@semmel.store</a></p>
                <p class="text-xl mt-4 mb-16">For marketing or wholesale enquiries email us at <a href="mailto:mk.sales@semmel.store" class="font-bold hover:text-slate-500">mk.sales@semmel.store</a></p>
            </div>
        </section>
    <footer class="bg-black px-3 py-5 text-slate-200 font-thinest tracking-widest text-center flex flex-col md:flex-row justify-around items-center pt-10 font-sans">
        <div class="flex md:hidden justify-around w-full my-10">
            <a href="#">INSTAGRAM</a>
            <a href="#">TIKTOK</a>
        </div>
        <button class="mx-auto my-5 sm:mx-10 block w-fit btn-contact-us tracking-widest block md:hidden">Contact Us</button>
        <a href="#" class="my-5">Terms & Conditions</a>
        <a href="#" class="my-5">Privacy Policy</a>
        <div class="flex my-6 text-2xl md:text-xl w-full md:w-auto justify-around">
            <p class="m-1"><i class="fa-brands fa-cc-visa"></i> </img></p>
            <p class="m-1"><i class="fa-brands fa-cc-paypal"></i></p>
            <p class="m-1"><i class="fa-brands fa-cc-mastercard"></i></p>
            <p class="m-1"><i class="fa-brands fa-cc-apple-pay"></i></p>
        </div>
        <div class="hidden md:flex my-3">
            <a href="#" class="m-1 text-xl"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="m-1 text-xl"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <p class="my-3">© SEMMEL 2022</p>
    </footer>
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    @include("mini-cart-script")
    <script>

    $('.btn-buy').on('click', function(){
        $.ajax({
            method: "post",
            url: "/cart",
            data: {
                "_token": "{{ csrf_token() }}",
                "product": $(this).data('slug')
            },
            success:()=>{
                loadProducts();
                showMiniCart();
            }
        });
    });
     $('.btn-contact-us').on('click', function(){
            //$('.contact-section').css('max-height', height);
            console.log("click")
            let height = ($('.contact-section').find('div').eq(0).height() + 300) + "px"
            if($('.contact-section').hasClass('active')){
                $('.contact-section').removeClass('active');
                $('.contact-section').css('max-height', '0px')
            }else{
                $('.contact-section').css('max-height', height)
                $('.contact-section').addClass('active');
            }
        })
        $('.btn-preview').on('click', function(){
            let productCard = $(this).closest('.product-card')
            if(!$(this).data('on')){
                $(this).data('on', true);
                let index = productCard.index();
                let translatePercent;
                switch(index){
                    case 0:
                        translatePercent = 33.3;
                        break;
                    case 1:
                        translatePercent = 0;
                        break;
                    case 2:
                        translatePercent = -33.3;
                        break;
                }
                $('.product-list').css({'-webkit-transform':'translateX('+translatePercent+'%)'});
                productCard.find('.img').hide();
                productCard.find('.video').show();
                $(this).html('<i class="fa-solid fa-xmark"></i>')
            }else{
                $(this).data('on', false);
                $('.product-list').css({'-webkit-transform':'translateX(0%)'});
                productCard.find('.img').show();
                productCard.find('.video').hide();
                $(this).html('<i class="fa-solid fa-eye"></i>')
            }
        });
    </script>

    <script>
    $.each($("video"), function(){
        this.controls = false; 
    }); 
    let userAgent = navigator.userAgent;
    $('.product-card').hover(function(){
        const video = $(this).find('video').get(0);
        // video.pause();
        // video.currentTime = 0;
        video.play();
    });
    $('.product-card').mouseleave(function(){
        const video = $(this).find('video').get(0);
        video.pause();
        video.currentTime = 0;
    });

    $('#dropdown').on('click', function(){
        $("#dropdown_lang").toggle();
    })
        var lastScrollTop = 0;
        var lastType;
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
                // downscroll code
                if(st > 50){
                if(lastType == "up"){
                    $("#header").stop( true, false )
                    //$("#header-nav").stop( true, false );
                }
                $("#header").animate({top:'-50px'}, 300);
                //$("#header-nav").animate({top:'-60px'}, 300);
                lastType = "down";
                console.log('down');
                }
            } else {
            if(lastType == "down"){
                $("#header").stop( true, false )
                //$("#header-nav").stop( true, false );
            }
            $("#header").animate({top:'0px'}, 300);
            //$("#header-nav").animate({top:'0px'}, 300);
            lastType = "up";
                console.log('up');

            }
            lastScrollTop = st;
        });
    </script>
</body>
</html>