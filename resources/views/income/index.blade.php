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


                        @foreach ($r as $product)

                            <div class="card" style="width: 18rem;" >
                                <div class="card-body">
                                    <p class="card-text"><b>Category:</b> {{$product->category}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
