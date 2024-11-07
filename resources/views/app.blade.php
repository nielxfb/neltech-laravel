<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NeLtech</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="d-flex flex-column min-vh-100 w-100 gap-4">
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="d-flex flex-row gap-3">
                <a class="navbar-brand ms-5" href="/">NeLtech</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex" role="search" action="/search" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="p-4 w-100 d-flex flex-row gap-4">
            <form class="card" style="width: 35dvh; height: fit-content;" method="POST" action="/get-product-by-category">
                @csrf
                <div class="card-header">
                    <h4 class="mt-2">Filter by Category</h4>
                </div>
                <div class="card-body">
                    @if ($categories->isEmpty())
                        <div class="alert alert-danger">No categories found. Please run migrations and seeders</div>
                    @endif
                    @foreach ($categories as $category)
                        <div class="form-check">
                            <input type="checkbox" name="category[]" value={{ $category->id }} class="form-check-input">
                            <label class="form-check-label">{{ $category->name }}</label>
                        </div>
                    @endforeach
                    @error('category')
                        <div class="alert alert-danger mt-4">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Apply</button>
                    <a href="/" class="btn btn-danger">Reset</a>
                </div>
            </form>
            <div class="d-flex flex-row flex-wrap justify-content-start gap-3 w-100">
            @if ($products->isEmpty())
                <div class="text text-danger text-center w-100">No products found.</div>
            @endif
                @foreach ($products as $product)
                    <x-card :product="$product" />
                @endforeach
            </div>
    </div>
    </main>
</body>

</html>
