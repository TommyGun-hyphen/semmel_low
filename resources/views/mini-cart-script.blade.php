<script>
    function showMiniCart(){
        $("#mini-cart").css('right', '0px');
        $("#mini-cart-shadow").fadeIn();
    }
    function hideMiniCart(){
        $("#mini-cart").css('right', '-320px');
        $("#mini-cart-shadow").fadeOut();
    }
    $("#mini-cart-close").on('click', function(){
        hideMiniCart();
    })

    $("#mini-cart-open").on('click', function(){
        showMiniCart();
    })
    $(".checkout_btn").on('click', function(){
        const stripe = Stripe("{{env('STRIPE_PUBLIC_KEY')}}");
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
    function registerButtons(){
        $(".btn-delete").on('click', function(){
            $.ajax({
                method: "DELETE",
                url: "/cart/" + $(this).data('slug'),
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: ()=>{
                    $(this).closest('li').remove();
                    loadProducts();
                },
                error: ()=>{

                }
            })
        });

        $('.btn-update').on('click', function(){
            $.ajax({
                method: 'PUT',
                url: '/cart/'+$(this).data('slug'),
                data: {
                    "_token": "{{ csrf_token() }}",
                    "quantity" : $(this).data('quantity')
                },
                success: ()=>{
                    loadProducts();
                }
            });
        });
    }
    function loadProducts(){
        $.ajax({
            method: "get",
            url: "/cart/json",
            dataType: 'json',
            success: (data)=>{
                $("#mini-cart-list").html("");
                $("#cart-total").text('€'+data.total);
                for(key of Object.keys(data.cart)){
                    $("#mini-cart-list").append(`
                    <li class="flex border-b py-3 border-slate-500">
                        <div>
                            <h3>${data.cart[key].name}</h3>
                            <h3>Є${data.cart[key].price}</h3>
                            <div class="flex justify-around my-4">
                                @foreach ([1, 2, 3] as $nb)
                                        <button type="button" data-quantity="{{$nb}}" data-slug="${key}"
                                            class="${(data.cart[key].quantity == {{$nb}} )? 'bg-black text-white' : 'bg-white text-black'} border border-black px-2 cursor-pointer mx-1 btn-update">{{ $nb }}</button>
                                @endforeach
                            </div>
                            <button type="button" class="text-red-600 text-xs text-left mt-8 btn-delete" data-slug="${key}">Remove from bag</button>
                        </div>
                        <div>
                            <img src="${data.cart[key].img}" alt="${data.cart[key].name}">
                        </div>
                    </li>
                    `)

                }
                registerButtons();
            }

        })
    }

    loadProducts();
</script>