@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $product)
 
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <a href="{{ action('ProductController@show',["product"=>$product->id,'slug'=>str_slug($product->product_name)]) }}">
                                <img src="{{ asset('uploads/'.$product->product_image)}}" class="img-responsive">
                            </a>
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <h3>{{$product->product_name}}</h3>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 price">
                                        <h3>
                                            <label>
                                                @if(class_exists('Currency'))
                                                {{ Currency::getCurrentCurrency($product->product_price) }}
                                                @endif
                                            </label>
                                        </h3>
                                    </div>
                                    <div class="col-md-5 col-xs-12 col-md-offset-1">
                                        <a href="{{ action('ProductController@show',["product"=>$product->id,'slug'=>str_slug($product->product_name)]) }}" class="btn btn-success btn-product"> Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 
@endsection
