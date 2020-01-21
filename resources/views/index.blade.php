@extends('header')
@section('content')

     <div class="container">
  	  	<h2 class="text-center">CRUD EXAMPLE</h2>
  	  	<a href="{{ route('products.create') }}" class="btn btn-primary mb-2">Create</a>
    	<div class="list-group text-center">
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Vendor</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($products as $product) 
			    <tr>
			      <th scope="row">{{ $product->id }}</th>
			      <td>{{ $product->name }}</td>
			      <td>{{ $product->price }} $</td>
			      <td>{{ $product->vendor }}</td>
			      <td class="d-flex flex-row justify-content-center">
			      	<a href="{{ route('products.show', $product->id) }}" class="btn btn-warning mr-2">Show</a>
			      	<a href="{{ route('products.edit', $product->id) }}" class="btn btn-success mr-2">Edit</a>
			      	<form action="{{ route('products.destroy', $product->id) }}" method="POST" accept-charset="utf-">
			      		@method('DELETE')
			      		@csrf
			      		<button type="submit" class="btn btn-danger">Del</button>
			      	</form>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
    	</div>
    </div>
    
  @endsection
