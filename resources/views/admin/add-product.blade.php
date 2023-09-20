@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card  padding-20">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                            <form action="{{route('postAddProduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="short_description">Short Description:</label>
                                <textarea class="form-control" id="short_description" name="short_description" rows="2"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="first_image">First Image:</label>
                                <input type="file" class="form-control-file" id="first_image" name="first_image">
                            </div>

                            <div class="form-group">
                                <label for="gallery">Gallery Images:</label>
                                <input type="file" class="form-control-file" id="gallery" name="gallery[]" multiple>
                            </div>

                            <div class="form-group">
                                <label for="variants">Variants (comma-separated):</label>
                                <input type="text" class="form-control" id="variants" name="variants" placeholder="e.g. Small, Medium, Large">
                            </div>

                            <div class="form-group">
                                <label for="additional_information">Additional Information:</label>
                                <textarea class="form-control" id="additional_information" name="additional_information" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
