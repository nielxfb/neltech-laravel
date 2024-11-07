<div class="card" style="width: 18rem;">
    <img src={{ $product->img_path }} class="card-img-top object-fit-contain" style="height: 300px" alt="@yield('name')">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ Number::currency($product->price, in: 'IDR') }}</h6>
        <p class="card-text">{{ $product->description }}</p>
    </div>
</div>
