<html>
    <head>
        <title>
            Mobile E-Commerce
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(url('css\login.css')); ?>">
        <script src="<?php echo e(url('js\login.js')); ?>" defer></script>
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
                        <a href="<?php echo e(url('register')); ?>"><img src="img/user.png"></a>
                        <a href="#"><img src="img/cart.png"></a>
                    </div>
                </div>
                <ul class="links-container">
                </ul>
                </nav>
                </header>
                <div class ='accedi'>
                    <form name = 'nome_form' method = 'post'>
                        
                        <img src="img/logo.png">
                        <h1>Please sign in</h1>
                        <?php if($error == 'compilazione'): ?>
                        <section class = "error">Compilare tutti i campi</section>
                        <?php elseif($error == 'wrong'): ?>
                        <section class = "error">Credenziali non valide</section>
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div>
                        <input type="text" name="username" placeholder="Username" value = '<?php echo e(old("username")); ?>'>
                        <label>Username</label>
                        </div>
                        <div>
                        <input type="password" name="password" placeholder="Password">
                        <label>Password</label>
                        </div>
                    
                        <div>
                            <p>Non hai ancora un account?
                            <a href = "<?php echo e(url('register')); ?>">Registrati</a>
                            </p>
                        </div>
                        <button type="submit">Sign in</button>
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
</html><?php /**PATH C:\Users\simon\Desktop\hw2\resources\views/login.blade.php ENDPATH**/ ?>