<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
    User
    @endsection
</head>
<body class="body">
    @extends('../Admin/layout/main')

    @section('content')
    <div class="table-responsive">
        <a href="" class="btn btn-info mt-4">Add User</a>
        <h4 class="text-center">User Table</h4>
        <table class="table table-hover" id="user-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <th scope="col">city</th>
                <th scope="col">zip</th>
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
                <td>{{$user->zip}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->address1}}</td>
                <td>{{$user->address2}}</td>
                <td>{{$user->verificationCode}}</td>
                <td>
                    <a href="">update</a>
                </td>
                <td>
                    <a href="">update</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>