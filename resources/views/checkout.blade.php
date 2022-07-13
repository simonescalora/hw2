<html>
    <head>
        <title>
            Mobile E-Commerce
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css\checkout.css') }}">
        <script src = "{{ url('js/checkout.js') }}" defer></script>
        <script>const BASE_URL = "{{ url('/') }}/";</script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar">
            <div class="nav">
                <a href="{{ url('home') }}"><img src="img/logo.png" class="brand-logo"></a>
                <div class="nav-items">
                    <div class="search">
                        <form id="telefono">
                        <input type="search" class="search-box" placeholder="Cerca" id = "phone_name">
                        <input type ="submit" id = "submit" class="search-btn" value = "Search">
                        </form>
                    </div>
                    <a href="{{ url('logout') }}"><img src="img/user.png"></a>
                    <a href="{{ url('checkout') }}"><img src="img/cart.png"></a>
                </div>
            </div>
            <ul class="links-container">
            </ul>
        </nav>
            
        <div class = "resoconto">
	        <h3>Prodotti Selezionati</h3>
	        <div class ="carrello">
            <table class ="table">
			        <tr>
				        <th>ID</th>
                        <th>Nome</th>
                		<th>Prezzo</th>
                  		<th>Action</th>
			        </tr>
                    @for($i=0; $i < count($array); $i++)
			        <tr class = "">
				        <td>{{print_r(((array)$array[$i])['product_id'], true)}}</td>
                        <td>{{print_r(((array)$array[$i])['product_name'], true)}}</td>
                        <td>€{{print_r(((array)$array[$i])['product_price'], true)}}</td>
                        <td>
                            <a href = '#'>
                                <input type="hidden" name="{{print_r(((array)$array[$i])['product_id'], true)}}">
                                <button class = 'btn-remove'>Rimuovi</button>
                            </a>
                        </td>
			        </tr>
                    @endfor
                    @if($array != [])
			        <tr>
				        <td colspan ='2'></b>Checkout</b></td>
                        <td></td>
                        <td>
                            <button id = 'btn-checkout'>Checkout</button>
                        </td>
			        </tr>
                    @endif
		        </table>
	        </div>
        </div>
        </div>

        <footer>
            <div class="footer">
                <div id="elem1"><p><a><img class="img3" src="img/map.png"></a><br><p>Vieni a trovarci nel punto<br> vendita piu' vicino</p></div>
                <div id="elem1"><p><a><img class="img3" src="img/time.png"></a><br><p>Spedizione gratuita e veloce!<br> In sole 24h il vostro ordine <br>sara' gia' processato</p></div>
                <div id="elem1"><p><a><img class="img3" src="img/card.png"></a><br><p>Accettiamo tutti i metodi di pagamento!</p></div>
                <div id="elem1"><p><a><img class="img3" src="img/chat.png"></a><br><p>Serve qualche info? Non esitare a <br> contattare il nostro servizio clienti</p></div>
            </div>
            <div class="footer1">
                <p>Simone Scalora<br>1000002068</p>
            </div>
        </footer>

    </body>
</html>