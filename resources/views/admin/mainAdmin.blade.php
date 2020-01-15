@extends('admin.layouts.main')

@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Login Per Month</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['user_name']}}</td>
                <td><select class="form-control form-control-sm">
                        @if(!empty($user['user_log']))
                            @foreach($user['user_log'] as $userLog)
                                <option value=""> {{$userLog}} </option>
                            @endforeach
                        @endif
                    </select></td>
                <td>  <a class="alert-danger" href="{{route('deleteUser',$user['id'])}}" >   delete </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
