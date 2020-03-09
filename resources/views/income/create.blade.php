@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <form action="{{route('incomes.store')}}" enctype="multipart/form-data"   method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="naam"  class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-6">
                            <input type="text"  name="amount" class="form-control" placeholder="Category name">
                        </div>

                        <label for="naam"  class="col-sm-2 control-label">title</label>
                        <div class="col-sm-6">
                            <input type="text"  name="title" class="form-control" placeholder="Category name">
                        </div>

                        <label for="naam"  class="col-sm-2 control-label">description</label>
                        <div class="col-sm-6">
                            <input type="text" name="description" class="form-control" placeholder="Category name">
                        </div>

                        <label for="naam"  class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-6">

                        <select name="category">
                            <option value="general">general</option>
                            <option value="loaning">loaning</option>
                        </select>
                        </div>

                        <label for="naam"  class="col-sm-2 control-label">image</label>
                        <div class="col-sm-6">
                            <input type="file" name="img" class="form-control" placeholder="Category name">
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add product</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
