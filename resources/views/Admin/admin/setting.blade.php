<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap5.bundle.js"></script>
    @section('title')
    Setting
    @endsection
</head>
<body>
    @extends('Admin.layout.main')

    @section('content')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('Admin/Profile/'.$user->profile)}}" width="200px" height="200px" alt="notSelected" class="rounded-circle mt-4"> <br>
                    
                    <form action="profile/{{$user->id}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile"  style="width: 140px; margin-top:20px; padding-left:0px;">
                        <input type="submit" value="submit" class="btn btn-success" style="height:45px;margin-bottom:10px;padding:4px;">
                    </form>
                    <p class="fw-bold">Public Profile</p>
                </div>
                <div class="col-md-7 mt-5">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>
                                    {{Session::get('success')}}
                                </li>
                            </ul>
                        </div>
                    @endif
                    <!-- Change Email -->
                    <h6>Change Email</h6>
                    <p>If you change your email, the new email will be your email acount</p>
                    <form action="{{url('change-email')}}" method="POST">
                        @csrf
                        <span class="text-danger fs-6 fw-bold">
                           @if($errors->any())
                           <h6>{{$errors->first()}}</h6>
                           @endif
                        </span>
                        <input type="email" name ="email" class="form-control" placeholder="Enter your new email">
                        <br>
                        <input type="submit" class="btn button" value="Change email">
                    </form>
                    <hr>
                    <!-- Change Password -->
                    <h6>Change Password</h6>
                    <p>If you want to change your password, you must know your current password</p>
                    <a href="{{url('change_password')}}" class="btn button">change password</a>
                    
                    <hr>
                    <!-- Delete acount -->
                    <h6>Delete account</h6>
                    <p>If you delete your account, you will not access your account again!</p>
                    <a href="" class="btn button-danger" id="">Delete Count</a>
                    <br><br><br>
                </div>

                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
    @endsection
</body>
</html>