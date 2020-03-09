@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">homepage</div>
                    <div class="card-body">

                        @foreach ($r as $product)

                            <div class="card" style="width: 18rem;" >
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->amount}}</h5>
                                    <h5 class="card-title">{{$product->title}}</h5>
                                    <p class="card-text">{{$product->description}}</p>
                                    <p class="card-text">€ {{$product->category}}</p>
{{--                                    @if($product->img)--}}
                                        <img src="/{{ $product->img }}" style="height: 70px; width: 70px; ">
{{--                                    @else--}}
{{--                                        <img src="/image/default-user-profile.png" style="height: 70px; width: 70px; ">--}}
{{--                                    @endif--}}
                                </div>
                            </div>
                        @endforeach
                        <a href="{{route('incomes.create')}}">Add income </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
