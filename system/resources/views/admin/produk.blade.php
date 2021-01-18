@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row row-cols-1 row-cols-md-3">

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/team-1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">GAS 3KG </h5>
			        <p class="text-danger">Rp21.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/team-2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">GAS 12KG</h5>
			         <p class="text-danger">Rp.410.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/team-3.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">GAS 5,5 kg </h5>
			        <p class="text-danger">Rp325.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->
<!-- sampai disini -->
			</div>
    	</div>
    </div>
  </div>
</div>


@endsection