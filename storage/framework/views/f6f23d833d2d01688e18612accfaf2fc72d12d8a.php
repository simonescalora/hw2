<html>
    <head>
        <title>
            <?php echo e($title); ?>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(url('css\home.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="<?php echo e(url('js/home.js')); ?>" defer></script>
        <script>const BASE_URL = "<?php echo e(url('/')); ?>/";</script>
    </head>

    <body>

        <nav class="navbar">
            <div class="nav">
                <a href="#"><img src="img/logo.png" class="brand-logo"></a>
                <div class="nav-items">
                    <div class="search">
                        <form id="telefono">
                        <input type="search" class="search-box" placeholder="Cerca" id = "phone_name">
                        <input type ="submit" id = "submit" class="search-btn" value = "Search">
                        </form>
                    </div>
                    <a href="<?php echo e(url('logout')); ?>"><img src="img/user.png"></a>
                    <a href="<?php echo e(url('checkout')); ?>"><img src="img/cart.png"></a>
                </div>
            </div>
            <ul class="links-container">
                <li class="link-item"><a href="#" class="link">Smartphone</a></li>
                <li class="link-item"><a href="#" class="link">Iphone</a></li>
                <li class="link-item"><a href="#" class="link">Tablet</a></li>
                <li class="link-item"><a href="#" class="link">Ipad</a></li>
                <li class="link-item"><a href="#" class="link">Accessori</a></li>
            </ul>
        </nav>
            <h1>Benvenuto <?php echo e($username); ?>!</h1>
            <h2>Login/registrazione avvenuta con successo!</h2>
            <header class="hero-section">
                <div class="content">
                    <img src="img/logo.png" class="logo">
                    <p class="sub-heading">Best deals on Mobile Phone</p>
                </div>
            </header>

            <div class ="shop">
                <div class ="product-container">

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('product', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($products->links()); ?>

             
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
</html><?php /**PATH C:\Users\simon\Desktop\hw2\resources\views/home.blade.php ENDPATH**/ ?>