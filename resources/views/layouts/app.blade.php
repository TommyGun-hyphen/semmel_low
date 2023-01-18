<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SEMMEL</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

</style>
    <header id="header" class="fixed bg-stone-100 w-full z-50">
        <div class="flex flex-col items-center justify-between">
            <div id="header-logo" class="grow flex w-full relative">
                <a href="/" class="grow flex justify-center items-center">
                    <img src="/img/logo.png" alt="SEMMEL logo" class="w-48">
                </a>
                <div id="lang-globe" class="absolute right-0 top-0">
                    <button id="dropdown" data-dropdown-toggle="dropdown_lang" class="font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><img src="/img/globe.png" width="24" height="24" alt=""></button>
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
                </div>
            </div>
            <nav id="header-nav" class="flex items-center grow mx-4 relative w-1/2 py-1">
                <ul class="flex items-center flex-row w-1/3 mx-auto justify-between">
                    <li><a href="/store" class="block"><img style="height:35px" src="/img/S.png" alt=""></a></li>
                    <li><a href="/store" class="block"><img style="height:35px" src="/img/alchemy.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-black px-3 py-5 text-slate-200 font-thinest tracking-widest text-center flex flex-col md:flex-row justify-around items-center pt-10 font-sans">
        {{-- <div class="flex md:hidden justify-around w-full my-10">
            <a href="#">FACEBOOK</a>
            <a href="#">TIKTOK</a>
        </div> --}}
        <a href="#" class="my-5">Terms & Conditions</a>
        <a href="#" class="my-5">Privacy Policy</a>
        <div class="flex my-6 text-2xl md:text-xl w-full md:w-auto justify-around">
            <p class="m-1"><i class="fa-brands fa-cc-visa"></i></p>
            <p class="m-1"><i class="fa-brands fa-cc-paypal"></i></p>
            <p class="m-1"><i class="fa-brands fa-cc-mastercard"></i></p>
            <p class="m-1 hidden md:block"><i class="fa-brands fa-cc-apple-pay"></i></p>
        </div>
        <div class="hidden md:flex my-3">
            <a href="#" class="m-1 text-xl"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="m-1 text-xl"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <p class="my-3">© SEMMEL 2022</p>
    </footer>

    <script>
    
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