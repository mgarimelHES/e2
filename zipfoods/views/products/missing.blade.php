@extends('templates/master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    <div id='product-show'>
        <h2>Product Not Found</h2>
        <h3>Sorry, we were not able to find the product you are looking for</h3>

    </div>

    <a href='/products'>&larr; Check out our other products</a>


@endsection
