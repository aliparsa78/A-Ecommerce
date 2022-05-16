@section('title')
    Product
@endsection
@extends('Admin.layout.main')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        <h6>{{Session::get('success')}}</h6>
    </div>
@endif
<a href="{{url('add-product')}}" class="btn btn-info mt-4">Add Product <i class="fa fa-product"></i></a>
    <h4 class="text-center">Products</h4>
    <div class="table-responsive">
        <table class="table table-hover" id="product-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">cat_id</th>
                <th scope="col">image</th>
                <th scope="col">description</th>
                <th scope="col">original_price</th>
                <th scope="col">selling_price</th>
                <th scope="col">weight</th>
                <th scope="col">tax</th>
                <th scope="col">qty</th>
                <th scope="col">live</th>
                </tr>
            </thead>
            <tbody>
                <?php $flag=1; ?>
            @foreach($product as $product)
                <tr>
                <th scope="row">{{$flag++}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->categories->name}}</td>
                <td>
                    <img src="{{asset('../Admin/Products/'.$product->image)}}" width="100px" alt="">
                </td>
                <td>{{$product->desctiption}}</td>
                <td>{{$product->original_price}}</td>
                <td>{{$product->selling_price}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->tax}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->live}}</td>
                
                <td>
                    <a href="update-product/{{$product->id}}" class="btn btn-info fa fa-edit " ><i>update</i></a>
                </td>
                <td>
                    <a href="remove-product/{{$product->id}}" class="btn btn-danger fa fa-remove"><i>remove</i></a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection