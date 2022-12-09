<div id="mini-cart-shadow" class="hidden" style="position:fixed;inset:0px;background: rgba(0,0,0,0.5); z-index:50"></div>
<div id="mini-cart" style="right:-320px" class="fixed right-0 top-0 h-screen bg-white z-50 font-sans tracking-widest font-thin px-7 py-4 text-slate-700 w-80 transition-all duration-300">
    <div class="relative h-full">
        <button class="float-right text-2xl" id="mini-cart-close"><i class="fa-thin fa-x"></i></button>
        <h3 class="text-lg my-3">Your shopping bag</h3>
        <hr class="border-slate-500">
        <ul id="mini-cart-list" style="height: calc( 100% - 180px ); overflow-y:scroll">
            
            
        </ul>
        <div class="absolute bottom-0 w-full uppercase">
            <hr>
            <h3 class="my-4">payment: $300</h3>
            <hr>
            <div class="flex mb-5 justify-between mt-4">
                <a href="/cart" class="border border-black px-5">View bag</a>
                {{-- <a href="/checkout" class="border border-black bg-black text-white px-5">Checkout</a> --}}
                <button class="checkout_btn bg-black border border-black text-white px-5 font-light uppercase tracking-widest">Checkout</button>

            </div>
        </div>
    </div>
</div>

