@extends('templates/master')

@section('title')
    Add new products
@endsection

@section('content')

    @if ($newSaved)
        <div class='alert alert-success'> Thank you, your product has been submitted!!</div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'> You have new product validation errors, please check!!</div>
    @endif

    <div id='product-new'>
        <h2>{{ $product['name'] }}</h2>



        <p class='product-description'>
            {{ $product['description'] }}
        </p>

        <div class='product-price'>${{ $product['price'] }}</div>
    </div>

    <form method='POST' id='product-new' action='/products/new'>
        <h3>Review {{ $product['name'] }}</h3>
        <input type='hidden' name='sku' value='{{ $product['sku'] }}'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='review'>Review</label>
            <textarea name='review' id='review' class='form-control'>{{ $app->old('review') }}</textarea>
            (Min: 150 characters)
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
