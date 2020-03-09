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
                                    <p class="card-title">
                                        {{$product->img}}
                                        {{asset('storage/file.txt')}}
                                    </p>

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
