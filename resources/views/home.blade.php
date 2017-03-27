@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $product)
 
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{ asset('uploads/'.$product->product_image)}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <h3>{{$product->product_name}}</h3>
                                    </div>
                                    <div class="col-md-12 col-xs-12 price">
                                        <h3>
                                            <label>{{ App\Currency\CurrencyHelper::getCurrentCurrency($product->product_price) }}</label>
                                        </h3>
                                    </div>
                                </div>
                                <!--<p>{{$product->product_description}}</p>-->
<!--                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="{{ URL::route('home.show',["product"=>$product->id]) }}" class="btn btn-success btn-product"> Detail</a></div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 
@endsection
