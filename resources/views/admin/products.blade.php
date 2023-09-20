@extends('layouts.admin')  {{-- Assuming you have an admin layout --}}

@section('content')
<section class="section">

    <div class="container">
        <h2>All Products</h2>
{{--        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add New Product</a>--}}
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Short Description</th>
                <th>First Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="/product/{{ $product->slug }}">{{ $product->title }}</a></td>
                    <td>{{ $product->short_description }}</td>
                    <td><img src="{{ asset('/storage/'.$product->image) }}" alt="{{ $product->title }}" width="100"></td>
                    <td>
{{--                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>--}}
                        {{-- Add a delete button if needed --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</section>
@endsection
