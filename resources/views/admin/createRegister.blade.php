@extends('admin.layouts.main')
@section('content')
    <form method="post" action="{{route('register')}}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
            <small class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="user_name">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{csrf_field()}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
