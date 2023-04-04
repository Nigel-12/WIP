@include('partials.header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="logo.png" alt="NASA" style="width:200px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/addCustomer">Add Customer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Product</a>
      </li>
      <li class="text-end">
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>

  </div>
</nav>  

<table class="table table-bordered table-dark">
<thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->productName}}</td>
      <td>{{$product->productPrice}}</td>
      <td>{{$product->productQuantity}}</td>

      <td><a href="edit/{{$product->id}}"><button type="button" class="btn btn-light">Edit</button></a></td>
      <td><a href="delete/{{$product->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')