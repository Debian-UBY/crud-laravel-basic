<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First CRUD</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Create Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewProduct">View Products</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" method="post" action="/update/{{ $product->id }}">
          @csrf
          @method('PATCH') 
            <h1 class="text-center mb-4">Edit Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="nm_produk" class="form-control" value="{{ $product->nm_produk }}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="harga" class="form-control" value="{{ $product->harga }}">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" name="stok" class="form-control" value="{{ $product->stok }}">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>