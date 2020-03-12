@extends('layouts.app')
@extends('layouts.sidebar')
@extends('layouts.footer')

@section('content')
    <div class="add">
       <h1><span class="blue">&lt;</span>Financial<span class="blue">&gt; </span><span class="yellow">Overview</span></h1>
    </div>
           @guest
           @else
               <button id="add_button" class="btn btn-primary">
                   <a class="add_button" href="{{route('incomes.create')}}">+ Add income</a>
               </button>
           @endif


            <table class="container">
                <div class="container table-header">General</div>
                <thead>
                    <tr>
                        <th><h1>Price</h1></th>
                        <th><h1>Title</h1></th>
                        <th><h1>Description</h1></th>
                        <th><h1>Category</h1></th>
                        <th><h1>Date</h1></th>
                        <th><h1>Options</h1></th>
                    </tr>
                </thead>

                <tbody>
                    @if($general->count() == 0)
                        <p>Column General is empty</p>
                    @else
                        @foreach ($general as $product)
                            <tr>
                                <td >€ {{$product->amount}},-</td>
                                <td maxlength="4" class="text-white">{{$product->title}}</td>
                                <td maxlength="4" class="text-white">{{$product->description}}</td>
                                <td class="text-white">{{$product->category}}</td>
                                <td class="text-white"> {{$product->date->format('d-m-yy')}}</td>
                                <td class="text-white">
                                    <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                            <a class="delete fa fa-edit" onclick="document.getElementById('delete').submit();"></a>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <table class="container">
                <div class="container table-header">Loaning</div>
                <thead>
                    <tr>
                        <th><h1>Price</h1></th>
                        <th><h1>Title</h1></th>
                        <th><h1>Description</h1></th>
                        <th><h1>Category</h1></th>
                        <th><h1>Date</h1></th>
                        <th><h1>Settings</h1></th>
                    </tr>
                </thead>
                <tbody>
                    @if($loaning->count() == 0)
                        <tr>
                            <td>Column Loaning is empty</td>

                        </tr>

                    @else
                        @foreach ($loaning as $product)
                            <tr>
                                <td >€ {{$product->amount}}</td>
                                <td class="text-white">{{$product->title}}</td>
                                <td class="text-white">{{$product->description}}</td>
                                <td class="text-white">{{$product->category}}</td>
                                <td class="text-white"> {{$product->date->format('d-m-yy')}}</td>
                                <td class="text-white">
                                    <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
{{--                                                <a class="delete" onclick="document.getElementById('delete').submit();">--}}
{{--                                                    <i class="fa fa-trash-o text-danger"> </i>--}}
{{--                                                </a>--}}
                                        <a class="delete fa fa-edit" onclick="document.getElementById('delete').submit();"></a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <table class="container">
                <div class="container table-header">Reminder</div>
                <thead>
                    <tr>
                        <th><h1>Price</h1></th>
                        <th><h1>Title</h1></th>
                        <th><h1>Description</h1></th>
                        <th><h1>Category</h1></th>
                        <th><h1>Date</h1></th>
                        <th><h1>Settings</h1></th>
                    </tr>
                </thead>

                <tbody>
                @if($reminder->count() == 0)
                    <p>Column Reminder is empty</p>
                @else
                    @foreach ($reminder as $product)
                        <tr>
                            <td >€ {{$product->amount}}</td>
                            <td class="text-white">{{$product->title}}</td>
                            <td class="text-white">{{$product->description}}</td>
                            <td class="text-white">{{$product->category}}</td>
                            <td class="text-white"> {{$product->date->format('d-m-yy')}}</td>
                            <td class="text-white">
                                <form action="{{route('incomes.destroy', $product->id)}}" id="delete" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a class="delete fa fa-edit" onclick="submit"></a>

                                </form>
                            </td>
                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>
@endsection
