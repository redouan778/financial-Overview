@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">homepage
                        @guest
                        @else
                            <button id="add_button" class="btn btn-primary">
                                <a class="add_button" href="{{route('incomes.create')}}">+ Add income</a>
                            </button>
                        @endif
                    </div>
                    <div class="card-body">
                        @foreach ($general as $product)
                            <div class="card" style="width: 18rem;" >
                                <div class="card-body">
                                    <h5 class="card-title"><b>Price:</b> €{{$product->amount}}</h5>
                                    <h5 class="card-title"><b>Title:</b>{{$product->title}}</h5>
                                    <p class="card-text"><b>Description:</b>{{$product->description}}</p>
                                    <p class="card-text"><b>Category:</b> {{$product->category}}</p>
                                    <p class="card-text"><b>Date:</b> {{$product->date->format('d-m-yy')}}</p>
                                    <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">
                                            <a class="delete" onclick="document.getElementById('delete').submit();">delete</a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Loaning</h3>
                    </div>
                    <div class="card-body">
                        @if(!isset($loaning))
                            <p>You dont have Reminders!</p>
                        @else
                        @foreach ($loaning as $product)
                            <div class="card" style="width: 18rem;" >
                                <div class="card-body">
                                    <h5 class="card-title"><b>Price:</b> €{{$product->amount}}</h5>
                                    <h5 class="card-title"><b>Title:</b>{{$product->title}}</h5>
                                    <p class="card-text"><b>Description:</b>{{$product->description}}</p>
                                    <p class="card-text"><b>Category:</b> {{$product->category}}</p>
                                    <p class="card-text"><b>Date:</b> {{$product->date->format('d-m-yy')}}</p>
                                    <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">
                                            <a class="delete" onclick="document.getElementById('delete').submit();">delete</a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Reminders</h3>
                    </div>
                    <div class="card-body">
                        d
                        @if(isset($reminder))
                            <p>You dont have Reminders!</p>
                        @else
                            @foreach ($reminder  as $product)
                                <div class="card" style="width: 18rem;" >
                                <div class="card-body">
                                    <h5 class="card-title"><b>Price:</b> €{{$product->amount}}</h5>
                                    <h5 class="card-title"><b>Title:</b>{{$product->title}}</h5>
                                    <p class="card-text"><b>Description:</b>{{$product->description}}</p>
                                    <p class="card-text"><b>Category:</b> {{$product->category}}</p>
                                    <p class="card-text"><b>Date:</b> {{$product->date->format('d-m-yy')}}</p>
                                    <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">
                                            <a class="delete" onclick="document.getElementById('delete').submit();">delete</a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
