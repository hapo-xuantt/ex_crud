@extends('header')
@section('content')

<div class="container">
    <h2 class="text-center">CRUD EXAMPLE</h2>
    <div class="w-50 mx-auto">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" autocomplete="off" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label>Vendor</label>
                <input type="text" class="form-control" name="vendor" autocomplete="off" placeholder="Enter vendor">
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<div>

@endsection
