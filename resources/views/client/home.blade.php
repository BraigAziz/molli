@extends('layouts.home')

@section('content')
    <section class="banners">
        <!-- Add banner images or sliders here -->
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <ul>
            <!-- Loop through products and display them -->
            <li>
                <img src="path_to_image.jpg" alt="Product Name">
                <h3>Product Name</h3>
                <p>Product Description</p>
                <p>Price: $XXX.XX</p>
                <button>Add to Cart</button>
            </li>
            <!-- Repeat for each product -->
        </ul>
    </section>

    <!-- Add more sections as needed, like top categories, testimonials, etc. -->
@endsection
