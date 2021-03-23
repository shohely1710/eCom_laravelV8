@extends('master')
@section('content')

    <div class="custom-product">


        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @foreach($products as $item)
                    <div class="row searched-items cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                                <div class="">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->description}}</p>
                                </div>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-warning"> Remove from Cart</button>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

@endsection