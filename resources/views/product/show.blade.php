@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{ asset('uploads/'.$product->product_image)}}" class="img-responsive">
            </div>
        </div>
        <div class="col-md-8">

            <div class="caption">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h3>{{$product->product_name}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h3>{{$product->product_description}}</h3>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 price">
                    <h3>
                        <label>
                            @if(class_exists('Currency'))
                                {{Currency::getCurrentCurrency($product->product_price)}}
                            @endif
                                </label>
                    </h3>
                </div>
            </div>


        </div>
    </div>
</div>
</div>

@endsection
