@extends('header')
@section('content')

<div class="container">
    <h2 class="text-center">CRUD EXAMPLE</h2>
    <div class="w-50 mx-auto">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name1">Name</label>
                <input type="text" class="form-control" id="name1" name="name" autocomplete="off" placeholder="Enter name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" autocomplete="off" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label>Vendor</label>
                <input type="text" class="form-control" name="vendor" value="{{ $product->vendor }}" autocomplete="off" placeholder="Enter vendor">
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<div>
@endsection
