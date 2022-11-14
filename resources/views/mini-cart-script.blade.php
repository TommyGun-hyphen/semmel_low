<script>
    $("#mini-cart-close").on('click', function(){
        //$("#mini-cart").fadeOut();
        $("#mini-cart").css('right', '-320px');
        $("#mini-cart-shadow").fadeOut();
    })

    $("#mini-cart-open").on('click', function(){
        $("#mini-cart").css('right', '0px');
        $("#mini-cart-shadow").fadeIn();
    })


    function loadProducts(){
        $.ajax({
            method: "get",
            url: "/cart",
            dataType: 'json',
            success: (data)=>{
                $("#mini-cart-list").html("");
                for(key of Object.keys(data.cart)){
                    $("#mini-cart-list").append(`
                    <li class="flex border-b py-3 border-slate-500">
                        <div>
                            <h3>${data.cart[key].name}</h3>
                            <h3>Є${data.cart[key].price}</h3>
                            <div class="flex justify-around my-4">
                                @foreach ([1, 2, 3] as $nb)
                                    <form class="inline" method="post" action="/cart/${key}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="quantity" value="{{ $nb }}">
                                        <button type="submit"
                                            class="${(data.cart[key].quantity == {{$nb}} )? 'bg-black text-white' : 'bg-white text-black'} border border-black px-2 cursor-pointer mx-1">{{ $nb }}</button>
                                    </form>
                                @endforeach
                            </div>
                            <form action="/cart/${key}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600 text-xs text-left mt-8">Remove from bag</button>
                            </form>
                        </div>
                        <div>
                            <img src="${data.cart[key].img}" alt="${data.cart[key].name}">
                        </div>
                    </li>
                    `)

                }
            }

        })
    }

    loadProducts();
</script>