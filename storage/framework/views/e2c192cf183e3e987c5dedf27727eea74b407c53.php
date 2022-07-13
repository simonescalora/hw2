<div class = "product-card">
            <img src="<?php echo e(url('img')); ?>/<?php echo e($product['image']); ?>" class="product-img">
            <h2 class ="product-brand"><?php echo e($product['name']); ?></h2>
            <p class="product-des"><?php echo e($product['description']); ?></p>
            <span class = "price">&euro; <?php echo e($product['price']); ?></span>
            <input type="hidden" name="<?php echo e($product['price']); ?>">
            <input type="hidden" name="<?php echo e($product['name']); ?>">
            <input type="hidden" name="<?php echo e($product['id']); ?>">
            <img class ="card-btn" src="img/notcarrello.png">
</div>

<?php /**PATH C:\Users\simon\Desktop\hw2\resources\views/product.blade.php ENDPATH**/ ?>