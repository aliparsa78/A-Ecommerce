<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
    Admin
    @endsection
</head>
<body class="body">
    @extends('../Admin/layout/main')

    @section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <a href="{{url('add-admin')}}" class="btn btn-info mt-4">Add admin <i class="fa fa-user"></i></a>
    <h4 class="text-center">Admin Table</h4>
    <div class="table-responsive">
        <table class="table table-hover" id="user-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <th scope="col">city</th>
                <th scope="col">phone</th>
                <th scope="col">country</th>
                <th scope="col">address1</th>
                <th scope="col">address2</th>
                <th scope="col">verificationcode</th>
                <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->address1}}</td>
                <td>{{$user->address2}}</td>
                <td>{{$user->verificationCode}}</td>
                <td>
                    <a href="update-user/{{$user->id}}" class="btn btn-info fa fa-edit disabled" ><i>update</i></a>
                </td>
                <td>
                    <a href="remove-user/{{$user->id}}" class="btn btn-danger fa fa-remove"><i>remove</i></a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>