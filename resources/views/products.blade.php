<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products</title>
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
            <li class="nav-item">
              <a class="nav-link" href="/">Create Product</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/viewProduct">View Products</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                  @foreach ($product as $item)

                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nm_produk }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                      <a href="/editProduct/{{ $item->id }}" class="btn btn-success">Edit</a>
                      <form action="/delete/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="subbmit" class="bbtn btn-danger">Hapus</button>
                      </form>
                      
                    </td>
                  </tr>
                      
                  @endforeach
                
            </tbody>
        </table>
    </div>  
</body>
</html>