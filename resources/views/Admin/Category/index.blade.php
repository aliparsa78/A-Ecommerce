@section('title')
    Categories
@endsection
@extends('Admin.layout.main')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        <h6>{{Session::get('success')}}</h6>
    </div>
@endif
<a href="{{url('add_category')}}" class="btn btn-info mt-4">Add Category <i class="fa fa-category"></i></a>
    <h4 class="text-center">Categories</h4>
    <div class="table-responsive">
        <table class="table table-hover" id="category-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">featured</th>
                <th scope="col">active</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php $flag=1; ?>
            @foreach($category as $category)
                <tr>
                <th scope="row">{{$flag++}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <img src="{{asset('Admin/Category/'.$category->image)}}" width="100px;" height="100px;">
                </td>
                <td>{{$category->featured}}</td>
                <td>{{$category->active}}</td>
                
                <td>
                    <a href="update-category/{{$category->id}}" class="btn btn-info fa fa-edit " ><i>update</i></a>
                </td>
                <td>
                    <a href="remove-category/{{$category->id}}" class="btn btn-danger fa fa-remove"><i>remove</i></a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection