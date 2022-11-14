<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Email;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function(){
  $text_english = "
  <p style=\"margin:25px 0px\">
    SEMMEL is an homage to the Hungarian pioneer and martyr Dr. Semmelweis, father of antisepsis and misunderstood genius.
  </p>
  <p style=\"margin:25px 0px\">
    It is he who we must thank if today we fight to safeguard our health from germs, every time a doctor washes his hands or wears gloves, every time we take care of our hygiene and that of the places where we live in.
  </p>
  <p style=\"margin:25px 0px\">
    Known as \"the savior of mothers\", Semmelweis was an obstetrician at the Vienna General Hospital in 1847 when he changed the path of medicine with his discovery.
  </p>
  <p style=\"margin:25px 0px\">
    He noticed that the puerperal mortality of patients at the hospital exceeded 11%, and proceeded to investigate its cause over the strong objections of his chief, quote: \"it made me so miserable that life seemed worthless\".
  </p>
  <p style=\"margin:25px 0px\">
    After months of research he realized that with a simple gesture such as washing his hands he could save many new mothers from death caused by puerperal sepsis, although at the time the existence of microorganisms was not yet known.
  </p>
  <p style=\"margin:25px 0px\">
    Semmelweis's observations conflicted with the established scientific and medical opinions of the time, he instituted a policy where doctors were to wash their hands before touching patients with a calcium hypochlorite solution thus, obtaining a 90% drop in the mortality rate and to zero in the two months of the year following this discovery.
  </p>
  <p style=\"margin:25px 0px\">
    Despite the obvious data, he was insulted and rejected by academia and colleagues for this indecent practice, they were offended at the suggestion that they should wash their hands, feeling that their social status as gentlemen was inconsistent with the idea that their hands could be impure - \"it is ridiculous to wash one's hands for something that cannot be seen\" - \"death occurs by the will of God and not the fault of doctors\".
  </p>
  <p style=\"margin:25px 0px\">
    Semmelweis's revolutionary idea was contrary to all established medical understanding, as a result, his ideas were rejected by the medical community.
  </p>
  <p style=\"margin:25px 0px\">
    Semmelweis was deprived of an academic position but did not give up.
  </p>
  <p style=\"margin:25px 0px\">
    He returned home and continued his teachings, wrote to all doctors and all institutions for years until he fell into depression, lost his mental clarity and was locked up in an asylum in Vienna where he died on August 13, 1865, following the infections caused by the beating of the guards.
  </p>
  <p style=\"margin:25px 0px\">
    Today the rejection of a new disruptive discovery is called the “Semmelweis reflex”.
  </p>";
  $text_italian = "
  <p style=\"margin:25px 0px\">
    SEMMEL è un omage al pioniere e martire Ungherese Dr. Semmelweis, padre dell’antisepsi e genio incompreso. 
  </p>
  <p style=\"margin:25px 0px\">
    È lui che dobbiamo ringraziare se oggi lottiamo per salvaguardare la nostra salute dai germi, ogni volta che un medico si lava le mani o che indossa dei guanti, ogni volta che curiamo la nostra igiene e quella dei luoghi dove viviamo.
  </p>
  <p style=\"margin:25px 0px\">
    Conosciuto come “il salvatore delle madri”, Semmelweis era un medico ostetrico presso l’Ospedale generale di Vienna nel 1847 quando cambiò il percorso della medicina con la sua scoperta.</p>
  <p style=\"margin:25px 0px\">
    Notò che la mortalità puerperale delle pazienti presso l’ospedale superava l’11% e cercò in tutti i modi possibili la causa di questa infezione nonostante le forti obiezioni del suo superiore, questa una delle sue parole più celebri: \"Mi ha reso così infelice che la vita sembrava inutile\". 
  </p>
  <p style=\"margin:25px 0px\">
    Intuì dopo mesi di ricerca, che con un semplice gesto come lavarsi le mani, poteva salvare molte neomamme dalla morte causata dalla sepsi puerperale, nonostante al tempo l’esistenza di microorganismi non fosse ancora conosciuta.
  </p>
  <p style=\"margin:25px 0px\">
    Semmelweis affrontò le credenze della scienza e della medicina del suo tempo, impose ai medici di lavarsi le mani prima di toccare i pazienti con una soluzione di ipoclorito di calcio ottenendo cosi un calo del 90% del tasso di mortalità, e a zero nei due mesi dell'anno successivo a questa scoperta.
  </p>
  <p style=\"margin:25px 0px\">
    Nonostante gli evidenti dati, venne insultato e rigettato dal mondo accademico e dai colleghi per questa pratica indecorosa, si offesero ritenendo che il loro status sociale di gentiluomini non fosse coerente con l'idea che le loro mani potessero essere impure,
    “è ridicolo lavarsi le mani per qualcosa che non si vede” - “la morte avviene per volere di Dio e non per colpa dei medici”.

  </p>
  <p style=\"margin:25px 0px\">
    L'idea rivoluzionaria di Semmelweis era contraria a tutta la comprensione medica consolidata, di conseguenza, le sue idee furono respinte dalla comunità medica.
  </p>
  <p style=\"margin:25px 0px\">
    Semmelweis venne privato di una posizione accademica ma non si arrese.
  </p>
  <p style=\"margin:25px 0px\">
    Tornò in patria e continuò gli insegnamenti, scrisse a tutti i medici e a tutte le istituzioni per anni fino a che cadde in depressione, perse la lucidità mentale e venne rinchiuso in un manicomio a Vienna dove morì il 13 agosto 1865, in seguito alle infezioni provocate dalle percosse delle guardie.                    </p>
  <p style=\"margin:25px 0px\">
    Oggi viene definito “riflesso di Semmelweis” il rigetto di una nuova scoperta dirompente. 
  </p>
  ";
  $locale = session()->get('locale');
  $text = $text_english;
  if($locale == "it"){
    $text = $text_italian;
  }
  if($locale == null) $locale = "en";

  $load_popup = "";
  $block_popup = request()->cookie('block_popup');
  if($block_popup != "true"){
    $load_popup = "load_popup();";
    return response(view('index', compact("locale", "text", "load_popup")))->cookie('block_popup','true',60*24*7);
  }else{
    return view('index', compact("locale", "text", "load_popup"));
  }
});
Route::get('/store', function(){
  \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
  
  $gold = \Stripe\Product::retrieve("prod_MhdHhSzgTZZxIM");
  $silver = \Stripe\Product::retrieve("prod_MhdJ44KkI7Pmzd");
  $black = \Stripe\Product::retrieve("prod_MhdIidc7261Dve");
  
  
  $gold_price = \Stripe\Price::retrieve($gold["default_price"]);
  $silver_price = \Stripe\Price::retrieve($silver["default_price"]);
  $black_price = \Stripe\Price::retrieve($black["default_price"]);
  $prices = [
    "gold" => $gold_price,
    "silver" => $silver_price,
    "black" => $black_price,
  ];
  return view('store', compact("prices"));
});
Route::get('/refill', function(){
  return view('refill');
});


Route::post('/newsletter', function(){
  $unsubscribe_token = Str::uuid()->toString();
  $email = Email::create([
    'email' => request()->input('email'),
    'is_subscribed' => true,
    'unsubscribe_token' => $unsubscribe_token,
  ]);
  return redirect()->back();
});

Route::get('/cart', function(){
  $cart_session = request()->session()->get('cart');
  // dd($cart_session);
  $cart = [];
  if(!is_array($cart_session)){
    $cart_session = [];
  }
  \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
  $gold = \Stripe\Product::retrieve("prod_MhdHhSzgTZZxIM");
  $silver = \Stripe\Product::retrieve("prod_MhdJ44KkI7Pmzd");
  $black = \Stripe\Product::retrieve("prod_MhdIidc7261Dve");
  
  
  $gold_price = \Stripe\Price::retrieve($gold["default_price"])["unit_amount"]/100;
  $silver_price = \Stripe\Price::retrieve($silver["default_price"])["unit_amount"]/100;
  $black_price = \Stripe\Price::retrieve($black["default_price"])["unit_amount"]/100;

  foreach($cart_session as $item => $quantity){
    switch($item){
      case "silver":
        $cart[$item] = [
          "name" => "Silver Moon",
          "price" => $silver_price,
          "img" => "/img/silver-transparent.png",
          "quantity" => $quantity
        ];
        break;
      case "gold":
        $cart[$item] = [
          "name" => "Gold Nebluae",
          "price" => $gold_price,
          "img" => "/img/gold-transparent.png",
          "quantity" => $quantity
        ];
        break;
      case "black":
        $cart[$item] = [
          "name" => "Black Aether",
          "price" => $black_price,
          "img" => "/img/black-transparent.png",
          "quantity" => $quantity
        ];
        break;
    }
  }
  $total = 0;
  foreach($cart as $item){
    $total += $item["price"] * $item["quantity"];
  }
  if(request()->expectsJson()){
    return response()->json([
      "cart" => $cart,
      "total" => $total
    ]);
  }else{
    return view('cart', compact("cart", "total"));
  }
});

//delete from cart
Route::delete('/cart/{item}', function($item){
  request()->session()->forget('cart.'.$item);
  return redirect()->back();
});
//update quantity in cart
Route::put('/cart/{item}', function($item){
  $quantity = request()->input('quantity');
  if(!is_numeric($quantity)){
    return redirect()->back();
  }
  if(!in_array($item, ['silver', 'gold', 'blacl'])){
    return redirect()->back();
  }
  request()->session()->put('cart.'.$item, $quantity);

  if(request()->expectsJson()){
    return response()->json([
      "status" => "deleted"
    ]);
  }else{
    return redirect()->back();
  }

});

Route::post('/cart', function(){
  $product = request()->input('product');
  $quantity = request()->input('quantity');
  //validate product and quantity
  if(!is_numeric($quantity)){
    $quantity = 1;
  }
  if(($product != "silver" && $product!="gold" && $product != "black")){
    return redirect()->back();
  }
  //check if product in session as a key in cart array
  if(!request()->session()->has('cart.'.$product)){
    request()->session()->put('cart.'.$product, $quantity);
  }
  //add product and quantities
  else{
    $new_quantity = $quantity + request()->session()->get('cart.'.$product);
    if($new_quantity > 3) $new_quantity = 3;
    request()->session()->put('cart.'.$product, $new_quantity);
  }
  if(request()->expectsJson()){
    return response()->json([
      "status" => "added"
    ]);
  }else{
    return redirect()->back();
  }
});

Route::post('/checkout', function(){
  //create stripe object with key and shit
  \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
  
  // map cart to options
  $cart = request()->session()->get('cart');
  $line_items = [];

  $gold = \Stripe\Product::retrieve("prod_MhdHhSzgTZZxIM");
  $silver = \Stripe\Product::retrieve("prod_MhdJ44KkI7Pmzd");
  $black = \Stripe\Product::retrieve("prod_MhdIidc7261Dve");
  
  if(array_key_exists("silver", $cart)){
    $line_items[] = [
      // "price_data" => [
      //   "currency" => "EUR",
      //   "product_data" => [
      //     "name" => "Silver Moon",
      //     "description" => "Semmel",

      //   ],
      //   "unit_amount" => 3000
      // ],
      "quantity" => $cart["silver"],
      "price" => $silver["default_price"]
    ];
  }
  if(array_key_exists("gold", $cart)){
    $line_items[] = [
      // "price_data" => [
      //   "currency" => "EUR",
      //   "product_data" => [
      //     "name" => "Gold Nebulae",
      //     "description" => "Semmel",

      //   ],
      //    "unit_amount" => 3000
      // ],
      "quantity" => $cart["gold"],
      "price" => $gold["default_price"]
    ];
  }
  if(array_key_exists("black", $cart)){
    $line_items[] = [
      // "price_data" => [
      //   "currency" => "EUR",
      //   "product_data" => [
      //     "name" => "Black Aether",
      //     "description" => "Semmel",

      //   ],
      //   "unit_amount" => 3000
      // ],
      "quantity" => $cart["black"],
      "price" => $black["default_price"]
    ];
  }
  //...

  //create payment intent or wtv
  $session = \Stripe\Checkout\Session::create([
    "success_url" => "http://good.com",
    "cancel_url" => "http://bad.com",
    "payment_method_types" => ['card'],
    "mode" => "payment",
    "line_items" => $line_items,
    'shipping_address_collection' => [
      'allowed_countries' => ['IT'],
    ],
  ]);

  //return checkout session
  return response()->json($session);
});