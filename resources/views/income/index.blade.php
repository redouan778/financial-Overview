@extends('layouts.app')
@extends('layouts.sidebar')
@extends('layouts.footer')

@section('content')
    <div class="add">
       <h1>
           <span class="white">Financial</span>
           <span class="white">Overview</span>
       </h1>
    </div>
           @guest
           @else
               <button id="add_button" class="default_button btn">
                   <a class="white" href="{{route('incomes.create')}}">+ Add income</a>
               </button>
           @endif

            <table class="container">
                <div class="container table-header">Incomes</div>
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
                    @if($incomes->count() == 0)
                        <p>Column income is empty</p>
                    @else
                        @foreach ($incomes as $income)
                            <tr>
                                <td >€ {{$income->amount}},-</td>
                                <td maxlength="4" class="text-white">{{$income->title}}</td>
                                <td maxlength="4" class="text-white">{{$income->description}}</td>
                                <td class="text-white">{{$income->category}}</td>
                                <td class="text-white"> {{$income->date->format('d-m-yy')}}</td>
                                <td>
                                    <form class="actions" action="{{route('incomes.destroy', $income->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>

                                    <a href="{{ route('incomes.edit', $income->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <table class="container">
                <div class="container table-header">Loanings</div>
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
                @if($loanings->count() == 0)
                    <p>Column loaning is empty</p>
                @else
                    @foreach ($loanings as $Loaning)
                        <tr>
                            <td >€ {{$Loaning->amount}},-</td>
                            <td maxlength="4" class="text-white">{{$Loaning->title}}</td>
                            <td maxlength="4" class="text-white">{{$Loaning->description}}</td>
                            <td class="text-white">{{$Loaning->category}}</td>
                            <td class="text-white"> {{$Loaning->date->format('d-m-yy')}}</td>
                            <td>
                                <form class="actions" action="{{route('incomes.destroy', $Loaning->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <a href="{{ route('incomes.edit', $Loaning->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

            <table class="container">
                <div class="container table-header">Monthly Expenses</div>
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
                @if($monthly_expenses->count() == 0)
                    <p>Column monthly expense is empty</p>
                @else
                    @foreach ($monthly_expenses as $monthly_expense)
                        <tr>
                            <td >€ {{$monthly_expense->amount}},-</td>
                            <td maxlength="4" class="text-white">{{$monthly_expense->title}}</td>
                            <td maxlength="4" class="text-white">{{$monthly_expense->description}}</td>
                            <td class="text-white">{{$monthly_expense->category}}</td>
                            <td class="text-white"> {{$monthly_expense->date->format('d-m-yy')}}</td>
                            <td>
                                <form class="actions" action="{{route('incomes.destroy', $monthly_expense->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <a href="{{ route('incomes.edit', $monthly_expense->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

    <table class="container">
        <div class="container table-header">Reminders</div>
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
        @if($reminders->count() == 0)
            <p>Column reminder is empty</p>
        @else
            @foreach ($reminders as $reminder)
                <tr>
                    <td >€ {{$reminder->amount}},-</td>
                    <td maxlength="4" class="text-white">{{$reminder->title}}</td>
                    <td maxlength="4" class="text-white">{{$reminder->description}}</td>
                    <td class="text-white">{{$reminder->category}}</td>
                    <td class="text-white"> {{$reminder->date->format('d-m-yy')}}</td>
                    <td>
                        <form class="actions" action="{{route('incomes.destroy', $reminder->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                        <a href="{{ route('incomes.edit', $reminder->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
