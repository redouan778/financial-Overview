@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">homepage

                        <button id="add_button" class="btn btn-primary">

                            <a class="add_button" href="{{route('incomes.create')}}">+ Add income</a>
                        </button>

                    </div>

                    <div class="card-body">


                        @foreach ($r as $product)

                            <div class="card" style="width: 18rem;" >
                                <div class="card-body">
                                    <h5 class="card-title"><b>Price:</b> €{{$product->amount}}</h5>
                                    <h5 class="card-title"><b>Title:</b>{{$product->title}}</h5>
                                    <p class="card-text"><b>Description:</b>{{$product->description}}</p>
                                    <p class="card-text"><b>Category:</b> {{$product->category}}</p>
                                    <img src="/{{ $product->img }}" style="height: 70px; width: 70px; ">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
