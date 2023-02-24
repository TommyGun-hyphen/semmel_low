<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
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
body{
    font-family: serif;
}
.info-card{
    width: 21vw;
    height: 21vw;
    min-width: 200px;
    min-height: 200px;
    max-width: 30vw;
    max-height: 30vw;
    overflow: hidden;
    position: relative;
}
.info-card > .text {
    position: absolute;
    bottom: -50px;
    transition: all linear 200ms;
    font-size: 1em;
    left: 50%;
    transform: translateX(-50%);
}
@media screen and (min-width: 1024px) {
    .info-card > .text {
        font-size: 1.3em;
    }
}

.info-card > .img{
    position: absolute;
    height: 70%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    transition: all ease-in-out 400ms;
}
.info-card > .img img{
    height:100%;
    transform: scale(1.4,1.4);
    margin: 0px auto;
}
.info-card:hover > .text{
    bottom: 0px;
}
.info-card:hover > .img{
    transform: translate(-50%, -50%) scale(0.6, 0.6);
    top: 40%;
}
.banner{
    width: 100%;
    height: fit-content;
    position: relative;
}
@media screen and (min-width: 480px) {
  .banner{
    min-height: calc( 100vh - 200px);
  }
  
}


@media screen and (max-width: 480px) {
    .info-card{
        max-width: 90vw;
        max-height: 90vw;
    }
    .expand-list{
        max-width: 90vw;
    }
}

.banner-text > .text{
    padding: 3em 0em 3em 5em;
}

@media screen and (max-width: 760px) {
   
    .banner-text > .text{
        padding: 1em;
        font-size: 10px
    }
}
.banner-first{
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

.banner-second{
    padding-bottom: 200px;
    background: #F8f8f8;
    background-size: cover;
    color: black;
    background-position: center -160px;
    position: relative;
    margin-top:-160px;
    padding-top:160px;
    z-index: -1;
    -webkit-clip-path: url(#clip);
    clip-path: url(#clip); 
}
.banner-third{
    background-attachment: fixed;
    height: 300px;
}
.banner-fourth{
    /*background: url('img/tree.png') left no-repeat;*/
    background-size: contain;
    min-height: unset;
}
.expand-list{
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.expand-list-item{
    overflow-y: hidden;
    max-height: 25px;
    transition: all linear 500ms;
    cursor: pointer;
    margin: 20px;
}
.expand-list-item .content{
    padding-left: 30px;
}
#newsletter-popup{
    max-width: calc(100vw-10px);
    width: 550px;
}
#newsletter-popup #email-input{
    width: 20rem;
}
@media screen and (max-width: 480px) {
   
    #newsletter-popup{
        width: calc(100vw - 10px);
        font-size: .65em;
    }
    #newsletter-popup #email-input{
        width: 100%;
    }
    #plant{
        display: none;
    }
    .banner-first{
        background-size: 700px;
        background-position: top;
    }
}

.buttons-section{
    /*background: url("img/lines-bg.jpg") top center;*/
    background-size: cover;
    padding-bottom: 10px;
}
.contact-section{
    padding-right: 50px;
    padding-left: 50px;
}
.divider-md{
    margin-bottom: 150px;
}
@media screen and (max-width: 760px) {
    .btn-collection{
        margin-left:auto;
        margin-right:auto;
    }
    .divider-md{
    margin-bottom: 30px;
}
}
/* flow */
#svg-container{
    display: none;
}
.mobile-banner-space{
    display: none;
}

@media screen and (max-width: 760px) {

    .mobile-banner-space{
        display: block;
        height: 400px;
        margin-top: -95px;
    }
}
@media screen and (max-width: 760px) {
    .banner-first{
        position: fixed;
        /* transform: translate3d(0px, 0px,0px) scale(1); */
        top:0px;
        z-index: -2;
        background-color: #F8f8f8;
        height: 400px;
        clip-path: none;
        --webkit-clip-path: none;
    }
    
    .banner-second{
        padding-top: 0px;
        margin-top: 0px;
        z-index:10;
    }
    .banner-third{
        z-index:11;
    }
    .banner-fourth{
        z-index:12;
    }
    #svg-container{
        display: block;
        margin-top:-25vw;
        position: relative;
        bottom: -2px;
    }
}
@media screen and (max-width: 480px) {
    .banner-first{
        height: 400px;
    }
}


@media screen and (min-width: 480px) {
    .banner-first{
    background-position-y: -90px;
}
}

#svg-container{
    display: block;
    margin-top:-25vw;
}
</style>
    <header id="header" class="fixed bg-stone-100 w-full z-50">
        <div class="flex flex-col items-center justify-between">
            <div id="header-logo" class="grow flex w-full relative">
                <a href="/" class="grow flex justify-center items-center">
                    <img src="img/logo.png" alt="SEMMEL logo" class="w-48">
                </a>
                {{-- <div id="lang-globe" class="absolute right-0 top-0">
                    <button id="dropdown" data-dropdown-toggle="dropdown_lang" class="dropdown font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><img src="img/Globe.png" width="24" height="24" alt=""></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown_lang" class="absolute right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm text-gray-700 lang-dropdown" aria-labelledby="">
                            <li style="width:100%; display:flex; justify-content: end; padding:10px 20px"><button data-dropdown-toggle="dropdown_lang" class="dropdown"><i class="fa-solid fa-circle-xmark"></i></button></li>
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
    <main>
        <div style="height: 70px"></div>
        <svg height="0" width="0" class="svg-clip" style="position:absolute">
            <defs>
                <clipPath id="clip" clipPathUnits="objectBoundingBox">
                <path d="M 0 0 L 0 0.95 Q 0.3 0.88 0.5 0.95 T 1 0.95 L 1 0 L 0 0" />
                </clipPath>
            </defs>
        </svg>
        <section class="banner banner-first">
            
        </section>

        <div class="mobile-banner-space banner"></div>
        <svg viewbox="0 0 100 25" id="svg-container">
            <path fill="#F8f8f8" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" id="svg-path" />
        </svg>
        <section class="banner banner-text banner-second flex flex-col md:flex-row items-center h-fit overflow-hidden">
            
            <div class="text text-center font-light w-full md:w-3/4">
                <h1 class="text-lg">Ignác Fülöp Semmelweis</h1>
                <hr class="w-3/4 mx-auto my-4">
                <div class="text-lg text-left">
                    {!! $text !!} 

                </div>
                <div class="mt-4 divider-md"></div>
            </div>
            <div class="w-1/4 mx-auto max-h-screen">
                <img src="img/snake.png" style="transform: scale(1.5,1.5); margin-bottom:200px" alt="">
            </div>

        </section>

        <section class="banner banner-fourth flex flex-col md:flex-row items-center justify-center">
            <div class="flex items-center justify-center flex-col basis-2/3">
                <div class="flex justify-center flex-col md:flex-row mx-auto">
                    <div class="info-card m-3">
                        <div class="img">
                            <img src="img/bottles-02.png" alt="">
                        </div>
                        <div class="text">
                            <h3 style="white-space: nowrap;">Anodized Aluminum Case</h3>
                        </div>
                    </div>
                    <div class="info-card m-3">
                        <div class="img">
                            <img src="img/bottles-03.png" alt="">
                        </div>
                        <div class="text">
                            <h3 style="white-space: nowrap;">PP Nozzel</h3>
                        </div>
                    </div>
                    <div class="info-card m-3">
                        <div class="img">
                            <img src="img/bottles-04.png" alt="">
                        </div>
                        <div class="text">
                            <h3 style="white-space: nowrap;">Glass Inner Bottle</h3>
                        </div>
                    </div>
                </div>
                <ul class="expand-list">
                    <li class="expand-list-item">
                        <div class="title font-bold text-lg select-none">
                            + Ingredients
                        </div>
                        <div class="content">
                        
                        </div>
                    </li>
                    <li class="expand-list-item">
                        <div class="title font-bold text-lg select-none">
                            + Benefits
                        </div>
                        <div class="content">
                            {{-- <p>100% Recyclable</p> --}}
                        </div>
                    </li>
                </ul>
                <div class="opacity-50" style="margin-top:-100px; margin-right:-400px">
                    <img src="img/plant.png" width="50px" alt="plant" id="plant">
                </div>
            </div>
        
        </section>

        <section class="section-icons flex justify-between items-center mt-[100px]" style="height:100px;">
            <div class="mx-6 sm:mx-16 h-full hidden md:block"><img src="img/owl.png" class="h-full" alt=""></div>
            <div class="mx-6 sm:mx-16 h-full hidden md:block"><img src="img/flask.png" class="h-full" alt=""></div>
        </section>
        <section class="buttons-section flex justify-between items-center">
            <button class="bg-white border border-black px-8 mx-5 sm:mx-10 block w-fit btn-contact-us tracking-widest hidden md:block"  style="padding-top: 5px;padding-bottom: 5px;">Contact Us</button>
            <a href="/store" class="bg-white border border-black mx-5 px-8 block w-fit hover:scale-110 transition btn-collection" style="padding-top: 5px;padding-bottom: 5px; height:fit-content">Visit Collection</a>
        </section>

        <section style="max-height:0px; transition: all linear 400ms; overflow-y: hidden;" class="contact-section bg-white pt-0">
            <div>
                <p class="text-xl my-4">If you have questions, comments or concerns regarding our products please don't hesitate to send us an e-mail to <a href="mailto:info@semmel.store" class="font-bold hover:text-slate-500">info@semmel.store</a></p>
                <p class="text-xl mt-4 mb-16">For marketing or wholesale enquiries email us at <a href="mailto:mk.sales@semmel.store" class="font-bold hover:text-slate-500">mk.sales@semmel.store</a></p>
            </div>
        </section>

        <div id="popup-shadow" class="inset-0 fixed bg-slate-900/50 hidden" style="z-index: 100;"></div>
        <div id="newsletter-popup" style="z-index:300; transform: translate(-50%, -50%)" class="fixed top-1/2 left-1/2 bg-white py-8 px-3 md:px-10 text-center hidden text-slate-700 tracking-widest drop-shadow-xl">
            <button class="float-right" id="close-newsletter-popup"><i class="fa-solid fa-circle-xmark"></i></button>
            <img src="img/logo.png" width="150px" class="mx-auto my-3" alt="SEMMEL logo">
            <h3 class="">Join the SEMMEL Club</h3>
            <form action="/newsletter" method="POST">
                @csrf
                <input type="email" id="email-input" name="email" class="border border-slate-700 my-3 px-2 py-1 mx-auto w-full xs:w-80" placeholder="Email...">
                <br>
                <input id="mail-privacy" type="checkbox" required>
                <label for="mail-privacy">I agree to the privacy policy</label>
                <button type="submit" class="block mx-auto p-3"><i class="fa-sharp fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </main>
    <footer class="bg-black px-3 py-5 text-slate-200 font-thinest tracking-widest text-center flex flex-col md:flex-row justify-around items-center pt-10 font-sans">
        <div class="flex md:hidden justify-around w-full my-10">
            <a href="#">INSTAGRAM</a>
            <a href="#">TIKTOK</a>
        </div>
        <button class="mx-auto my-5 sm:mx-10 block w-fit btn-contact-us tracking-widest block md:hidden">Contact Us</button>
        <a href="#" class="my-5">Terms & Conditions</a>
        <a href="#" class="my-5">Privacy Policy</a>
        <div class="flex my-6 text-2xl md:text-xl w-full md:w-auto justify-around">
            <p class="m-1"><i class="fa-brands fa-cc-visa"></i></p>
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
    @include("mini-cart-partial")
    <script src="/js/jquery-3.6.1.min.js"></script>
    @include("mini-cart-script")
    <script>
    if(true){
        if($(window).width() < 760){
            $('.banner-first').css('position', 'absolute');
        }else{
            $('.banner-first').css('position', 'static');
        }
        $(window).scroll(function(){
            if($(window).width() < 760){
                $('.banner-first').css('top', $(window).scrollTop());
            }
        })
    }
    $(window).resize(function(){
        if($(window).width() < 760){
            $('.banner-first').css('position', 'absolute');
        }else{
            $('.banner-first').css('position', 'static');
        }
        $(window).scroll(function(){
            if($(window).width() < 760){
                $('.banner-first').css('top', $(window).scrollTop());
            }
        })
    })
    $(window).scroll(function() {
        if ($(window).scrollTop() > $(window).height()) {
            $('.banner-first').css('visibility', 'hidden');
        }
        else {
            $('.banner-first').css('visibility', 'visible');
        }
    });
    document.addEventListener('click', function handleClickOutsideBox(event) {
        const button = document.getElementsByClassName('dropdown')[0];
        const dropdown = document.getElementById('dropdown_lang');
        if (!button.contains(event.target)) {
            dropdown.style.display = 'none';
        }else{
            dropdown.style.display = 'block';
        }
    });
    // $('.dropdown').on('click', function(){
    //     $("#dropdown_lang").toggle();
    // })
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

        function load_popup(){
            setTimeout(function(){
                $("#newsletter-popup").toggle();
                $("#popup-shadow").toggle();
            }, 5000);
        }
        {{ $load_popup }}
        $("#close-newsletter-popup").on('click', function(){
            $("#newsletter-popup").toggle();
            $("#popup-shadow").toggle();
        });
        $('.expand-list-item').on('click', function(){
            let height = $(this).find('.content').eq(0).height();
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(this).css('max-height', '25px')
            }else{
                $(this).css('max-height', height + 25)
                $(this).addClass('active');
            }
        })
        $('.btn-contact-us').on('click', function(){
            //$('.contact-section').css('max-height', height);
    
            let height = ($('.contact-section').find('div').eq(0).height() + 300) + "px"
            if($('.contact-section').hasClass('active')){
                $('.contact-section').removeClass('active');
                $('.contact-section').css('max-height', '0px')
            }else{
                $('.contact-section').css('max-height', height)
                $('.contact-section').addClass('active');
            }
        })
        
    </script>
</body>
</html>