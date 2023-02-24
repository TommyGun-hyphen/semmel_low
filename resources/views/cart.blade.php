<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>SEMMEL</title>

</head>

<body>
    <style>
        @font-face {
            font-family: "CinzelDecorative";
            src: url("/fonts/CinzelDecorative-Regular.ttf");
        }

        body {
            font-family: serif;
        }

        .info-card {
            width: 21vw;
            height: 21vw;
            min-width: 200px;
            min-height: 200px;
            max-width: 30vw;
            max-height: 30vw;
            overflow: hidden;
            position: relative;
        }

        .info-card>.text {
            position: absolute;
            bottom: -50px;
            transition: all linear 200ms;
            font-size: 1em;
            left: 50%;
            transform: translateX(-50%);
        }

        @media screen and (min-width: 1024px) {
            .info-card>.text {
                font-size: 1.3em;
            }
        }

        .info-card>.img {
            position: absolute;
            height: 70%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: all ease-in-out 400ms;
        }

        .info-card>.img img {
            height: 100%;
            transform: scale(1.4, 1.4);
            margin: 0px auto;
        }

        .info-card:hover>.text {
            bottom: 0px;
        }

        .info-card:hover>.img {
            transform: translate(-50%, -50%) scale(0.6, 0.6);
            top: 40%;
        }

        .banner {
            width: 100%;
            height: fit-content;
            position: relative;
        }

        @media screen and (min-width: 480px) {
            .banner {
                min-height: calc(100vh - 200px);
            }

        }


        @media screen and (max-width: 480px) {
            .info-card {
                max-width: 90vw;
                max-height: 90vw;
            }

            .expand-list {
                max-width: 90vw;
            }
        }

        .banner-text>.text {
            padding: 3em 0em 3em 5em;
        }

        @media screen and (max-width: 760px) {

            .banner-text>.text {
                padding: 1em;
                font-size: 10px
            }
        }

        .banner-first {
            background: url('img/semmelweis.png');
            /* -webkit-clip-path: url(#clip); */
            clip-path: url(#clip);

            background-size: cover;
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: top;
            background-attachment: fixed;
            height: 300px;
        }

        .banner-second {
            padding-bottom: 200px;
            background: #F8f8f8;
            background-size: cover;
            color: black;
            background-position: center -160px;
            position: relative;
            margin-top: -160px;
            padding-top: 160px;
            z-index: -1;
            -webkit-clip-path: url(#clip);
            clip-path: url(#clip);
        }

        .banner-third {
            background-attachment: fixed;
            height: 300px;
        }

        .banner-fourth {
            /*background: url('img/tree.png') left no-repeat;*/
            background-size: contain;
            min-height: unset;
        }

        .expand-list {
            width: 500px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .expand-list-item {
            overflow-y: hidden;
            max-height: 25px;
            transition: all linear 500ms;
            cursor: pointer;
            margin: 20px;
        }

        .expand-list-item .content {
            padding-left: 30px;
        }

        #newsletter-popup {
            max-width: calc(100vw-10px);
            width: 550px;
        }

        #newsletter-popup #email-input {
            width: 20rem;
        }

        @media screen and (max-width: 480px) {

            #newsletter-popup {
                width: calc(100vw - 10px);
                font-size: .65em;
            }

            #newsletter-popup #email-input {
                width: 100%;
            }

            #plant {
                display: none;
            }

            .banner-first {
                background-size: 700px;
                background-position: top;
            }
        }

        .buttons-section {
            /*background: url("img/lines-bg.jpg") top center;*/
            background-size: cover;
            padding-bottom: 10px;
        }

        .contact-section {
            padding-right: 50px;
            padding-left: 50px;
        }

        .divider-md {
            margin-bottom: 150px;
        }

        @media screen and (max-width: 760px) {
            .btn-collection {
                margin-left: auto;
                margin-right: auto;
            }

            .divider-md {
                margin-bottom: 30px;
            }
        }

        /* flow */
        #svg-container {
            display: none;
        }

        .mobile-banner-space {
            display: none;
        }

        @media screen and (max-width: 760px) {

            .mobile-banner-space {
                display: block;
                height: 400px;
                margin-top: -95px;
            }
        }

        @media screen and (max-width: 760px) {
            .banner-first {
                position: fixed;
                /* transform: translate3d(0px, 0px,0px) scale(1); */
                top: 0px;
                z-index: -2;
                background-color: #F8f8f8;
                height: 400px;
                clip-path: none;
                --webkit-clip-path: none;
            }

            .banner-second {
                padding-top: 0px;
                margin-top: 0px;
                z-index: 10;
            }

            .banner-third {
                z-index: 11;
            }

            .banner-fourth {
                z-index: 12;
            }

            #svg-container {
                display: block;
                margin-top: -25vw;
                position: relative;
                bottom: -2px;
            }
        }

        @media screen and (max-width: 480px) {
            .banner-first {
                height: 400px;
            }
        }


        @media screen and (min-width: 480px) {
            .banner-first {
                background-position-y: -90px;
            }
        }

        #svg-container {
            display: block;
            margin-top: -25vw;
        }
    </style>
    <header id="header" class="fixed bg-stone-100 w-full z-50">
        <div class="flex flex-col items-center justify-between">
            <div id="header-logo" class="grow flex w-full relative">
                <a href="/" class="grow flex justify-center items-center">
                    <img src="/img/logo.png" alt="SEMMEL logo" class="w-48">
                </a>
                {{-- <div id="lang-globe" class="absolute right-0 top-0">
                    <button id="dropdown" data-dropdown-toggle="dropdown_lang"
                        class="dropdown font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                        type="button"><img src="img/Globe.png" width="24" height="24" alt=""></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown_lang"
                        class="absolute right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm text-gray-700 lang-dropdown" aria-labelledby="">
                            <li style="width:100%; display:flex; justify-content: end; padding:10px 20px"><button
                                    data-dropdown-toggle="dropdown_lang" class="dropdown"><i
                                        class="fa-solid fa-circle-xmark"></i></button></li>
                            <li>
                                <a href="/lang/it" class="block py-2 px-4 hover:bg-gray-100">italian</a>
                            </li>
                            <li>
                                <a href="/lang/en" class="block py-2 px-4 hover:bg-gray-100">English</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div style="position:absolute; right:0px; bottom:0px; margin:5px">
                    <div class="flex items-center">
                        <a href="/cart" class="uppercase tracking-widest font-sans font-thin text-sm hidden md:visible">Shopping Bag</a>
                        <button href="/cart" id="mini-cart-open"><img src="/img/bucket.png" alt="bucket/cart" width="40"></button>
                    </div>
                </div>
            </div>
            <nav id="header-nav" class="flex items-center grow mx-4 relative py-1 w-full">
                <ul class="flex items-center flex-row  mx-auto justify-center">
                    <li><a href="/store" ><img style="height:35px; margin: auto 10px" src="img/S.png" alt=""></a></li>
                    <li><a href="/refill" ><img style="height:35px; margin: auto 10px" src="img/alchemy.png" alt=""></a></li>
                </ul>
                
            </nav>
        </div>
    </header>
    <div style="height:30px"></div>
    <main class="w-full md:w-4/5 mx-auto font-sans uppercase font-thin tracking-widest" style="min-height: calc( 100vh - 100px)">
    
        <div style="height: 70px"></div>
        {{-- cart content --}}
        @if(request()->session()->get('cart'))
       
        <div class="flex flex-col md:flex-row">
            <table class="w-full text-center">
                <head>
                    <tr class="border-b">
                        <td class="text-left">Item</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td class="font-normal">Subtotal</td>
                    </tr>
                </head>
                <body>
                    @foreach($cart as $key => $item)

                        <tr class="">
                            <td class="">
                                <div class="flex items-center">
                                    <div  class="mx-2"><img src="{{$item['img']}}" width="150" alt="{{$item['name']}}"></div>
                                    <div class="mx-2">
                                        <span>{{$item['name']}}</span>
                                        <form action="/cart/{{$key}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="text-red-500 my-3" type="submit">Remove from bag</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>${{$item['price']}}</td>
                            <td>
                            <div class="flex justify-around">
                                @foreach ([1,2,3] as $nb)
                                   <form class="inline" method="post" action="/cart/{{$key}}">
                                        @csrf
                                        @method("PUT")
                                        <input type="hidden" name="quantity" value="{{$nb}}">
                                        <button type="submit" class="{{($item['quantity'] == $nb) ? 'bg-black text-white':'bg-white text-black'}} border border-black px-4 cursor-pointer">{{$nb}}</button>
                                    </form>
                                @endforeach
                            </div>
                            {{-- <button type="submit" class="{{($item['quantity'] == 2) ? 'bg-black text-white':'bg-white border border-black text-black'}} px-4 cursor-pointer">2</button> --}}
                            {{-- <button type="submit" class="{{($item['quantity'] == 3) ? 'bg-black text-white':'bg-white border border-black text-black'}} px-4 cursor-pointer">3</button> --}}
                            </td>
                            <td>${{$item['price'] * $item['quantity']}}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
            <div class="mx-0 md:mx-5 p-2 w-full md:w-1/2">
                <h3 class="my-4">Shopping bag total</h3>
                <hr>
                <ul>
                    <li class="flex justify-between my-4"><span>Shipping (FREE)</span> <span>$0</span></li>
                    <li class="flex justify-between my-4"><span>Total</span> <span>$ {{$total}}</span></li>
                </ul>
                <button class="checkout_btn bg-black text-white py-1 px-6 my-2 text-xl font-light uppercase w-full tracking-widest">proceed to checkout</button>
                <a href="/store" class="block text-center bg-white border border-black text-black py-1 px-6 my-2 text-xl font-light uppercase w-full tracking-widest">continue shopping</a>
            </div>
        </div>
        @else
            <div class="text-center" style="min-height: calc( 100vh - 200px)">
                <h3 class="mt-9">Cart is empty</h3>
                <a href="/store" class="text-stone-900 hover:text-stone-500">Click here to continue shopping</a>
            </div>
        @endif




        {{-- end cart content --}}
    </main>
    @include('mini-cart-partial')
    <footer
        class="bg-black px-3 py-5 text-slate-200 font-thinest tracking-widest text-center flex flex-col md:flex-row justify-around items-center pt-10 font-sans">
        <div class="flex md:hidden justify-around w-full my-10">
            <a href="#">INSTAGRAM</a>
            <a href="#">TIKTOK</a>
        </div>
        <button class="mx-auto my-5 sm:mx-10 block w-fit btn-contact-us tracking-widest block md:hidden">Contact
            Us</button>
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
    @include("mini-cart-script")
    <script src="https://js.stripe.com/v3/"></script>
    <script>
    //// STRIPE STUFF
    $(".checkout_btn").on('click', function(){
        const stripe = Stripe("{{ env('STRIPE_PUBLIC_KEY') }}");
        fetch('/checkout',{
            method:"POST",
            headers: {
                "X-CSRF-TOKEN":"{{ csrf_token() }}"
            },
            body: JSON.stringify({})
        }).then(res => res.json())
        .then(payload => {
            stripe.redirectToCheckout({sessionId: payload.id})
        })

    });


    //// END STRIPE STUFF
        if (true) {
            if ($(window).width() < 760) {
                $('.banner-first').css('position', 'absolute');
            } else {
                $('.banner-first').css('position', 'static');
            }
            $(window).scroll(function() {
                if ($(window).width() < 760) {
                    $('.banner-first').css('top', $(window).scrollTop());
                }
            })
        }
        $(window).resize(function() {
            if ($(window).width() < 760) {
                $('.banner-first').css('position', 'absolute');
            } else {
                $('.banner-first').css('position', 'static');
            }
            $(window).scroll(function() {
                if ($(window).width() < 760) {
                    $('.banner-first').css('top', $(window).scrollTop());
                }
            })
        })
        $(window).scroll(function() {
            if ($(window).scrollTop() > $(window).height()) {
                $('.banner-first').css('visibility', 'hidden');
            } else {
                $('.banner-first').css('visibility', 'visible');
            }
        });
        document.addEventListener('click', function handleClickOutsideBox(event) {
            const button = document.getElementsByClassName('dropdown')[0];
            const dropdown = document.getElementById('dropdown_lang');
            if (!button.contains(event.target)) {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        });
        // $('.dropdown').on('click', function(){
        //     $("#dropdown_lang").toggle();
        // })
        var lastScrollTop = 0;
        var lastType;
        $(window).scroll(function(event) {
            var st = $(this).scrollTop();
            if (st > lastScrollTop) {
                // downscroll code
                if (st > 50) {
                    if (lastType == "up") {
                        $("#header").stop(true, false)
                        //$("#header-nav").stop( true, false );
                    }
                    $("#header").animate({
                        top: '-50px'
                    }, 300);
                    //$("#header-nav").animate({top:'-60px'}, 300);
                    lastType = "down";
                    console.log('down');
                }
            } else {
                if (lastType == "down") {
                    $("#header").stop(true, false)
                    //$("#header-nav").stop( true, false );
                }
                $("#header").animate({
                    top: '0px'
                }, 300);
                //$("#header-nav").animate({top:'0px'}, 300);
                lastType = "up";
                console.log('up');

            }
            lastScrollTop = st;
        });

       
        $("#close-newsletter-popup").on('click', function() {
            $("#newsletter-popup").toggle();
            $("#popup-shadow").toggle();
        });
        $('.expand-list-item').on('click', function() {
            let height = $(this).find('.content').eq(0).height();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).css('max-height', '25px')
            } else {
                $(this).css('max-height', height + 25)
                $(this).addClass('active');
            }
        })
        $('.btn-contact-us').on('click', function() {
            //$('.contact-section').css('max-height', height);

            let height = ($('.contact-section').find('div').eq(0).height() + 300) + "px"
            if ($('.contact-section').hasClass('active')) {
                $('.contact-section').removeClass('active');
                $('.contact-section').css('max-height', '0px')
            } else {
                $('.contact-section').css('max-height', height)
                $('.contact-section').addClass('active');
            }
        })
    </script>
</body>

</html>
