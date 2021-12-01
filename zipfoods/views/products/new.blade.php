@extends('templates/master')

@section('title')
    Add a new product
@endsection

@section('head')
    <link href='/css/products/new.css' rel='stylesheet'>

@section('content')

    @if ($newSaved)
        <div class='alert alert-success'> Thank you, your product has been submitted!! <a
                href='/product?sku={{ $sku }}'>You
                can view it here...</a></div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'> You have new product validation errors, please check!!</div>
    @endif

    <form method='POST' id='new-product-form' action='/products/save'>
        <h3>New Product</h3>

        <div class='info'>All the fields are mandatory</div>

        <div class='form-group'>
            <label for='sku'>SKU</label>
            <input type='text' class='form-control' name='sku' id='sku' value='{{ $app->old('sku') }}'>
            <div class='info'>Can only contain numbers, letters, dashes, and/or underscores.</div>
        </div>

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'>
                    {{ $app->old('description') }}</textarea>
            (Min: 150 characters)
        </div>

        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' name='price' id='price' class='form-control' value='{{ $app->old('price') }}'>
        </div>

        <div class='form-group'>
            <label for='available'>available</label>
            <input type='text' name='available' id='available' class='form-control' value='{{ $app->old('available') }}'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='text' name='weight' id='weight' class='form-control' value='{{ $app->old('weight') }}'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable</label>
            <input type='checkbox' name='perishable' id='perishable' value=1>
        </div>

        <button type='submit' class='btn btn-primary'>Submit new product</button>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href='/products'>&larr; Return to all products</a>


@endsection
