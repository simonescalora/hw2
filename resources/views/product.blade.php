<div class = "product-card">
            <img src="{{ url('img') }}/{{ $product['image'] }}" class="product-img">
            <h2 class ="product-brand">{{ $product['name'] }}</h2>
            <p class="product-des">{{ $product['description'] }}</p>
            <span class = "price">&euro; {{ $product['price'] }}</span>
            <input type="hidden" name="{{ $product['price'] }}">
            <input type="hidden" name="{{ $product['name'] }}">
            <input type="hidden" name="{{ $product['id'] }}">
            <img class ="card-btn" src="img/notcarrello.png">
</div>

