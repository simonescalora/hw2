<html>
    <head>
        <title>
            Mobile E-Commerce
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/signup.css') }}">
        <script src="{{ url('js\signup.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    </head>

    <body>

            <nav class="navbar">
                <div class="nav">
                    <a href="#"><img src="img/logo.png" class="brand-logo"></a>
                    <div class="nav-items">
                        <div class="search">
                            <input type="text" class="search-box" placeholder="Cerca">
                            <button class="search-btn">Search</button>
                        </div>
                        <a href="{{ url('login') }}"><img src="img/user.png"></a>
                        <a href="#"><img src="img/cart.png"></a>
                    </div>
                </div>
                <ul class="links-container">
                </ul>
                </nav>
                </header>
                <div class ='registrazione'>
                    <form name='signup' method = 'post'>
                        <img src="img/logo.png">
                        <h1>Sign up now!</h1>
                        @if ($error == 'compilazione')
                        <section class ='error'>Compilare tutti i campi</section>
                        @elseif ($error == 'esistenza_username')
                        <section class ='error'>Username già utilizzato</section>
                        @elseif ($error == 'caratteri_insufficienti')
                        <section class ='error'>Caratteri password insufficienti</section>
                        @elseif ($error == 'bad_passwords')
                        <section class ='error'>Le password non corrispondono</section>
                        @elseif ($error == 'esistenza_email')
                        <section class ='error'>Email già in uso</section>
                        @endif

                        @csrf
                        <div>
                            <input type="text" name="nome" placeholder="Name" value ='{{ old("nome")}}'>
                            <label>Nome</label>
                          </div>

                          <div>
                            <input type="text" name="cognome" placeholder="Surname" value ='{{ old("cognome")}}'>
                            <label>Cognome</label>
                          </div>

                          <div>
                            <input type="text" name="username" placeholder="Username" value ='{{ old("username")}}'>
                            <label>Username</label>
                          </div>

                          <div>
                            <input type="password" name="password" placeholder="Password">
                            <label>Password</label>
                          </div>

                          <div>
                            <input type="password" name="conferma" placeholder="Conferma">
                            <label>Conferma Password</label>
                          </div>

                          <div>
                            <input type="email" name="email" placeholder="name@example.com" value ='{{ old("email")}}'>
                            <label>Email address</label>
                          </div>
                    
                        <div>
                            <p><input type="checkbox"> Accetto politica privacy</p>
                        </div>
                        <button type="submit">Sign up</button>
                        <div>

                          <p>Sei già registrato?
                          <a href = "{{ url('login') }}">Accedi</a>
                          </p>
                      </div>
                      </form>
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