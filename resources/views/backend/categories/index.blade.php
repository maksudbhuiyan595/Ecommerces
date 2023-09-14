@extends('backend.master')

@section('content')

<div class="container">
    <h1 class="text-center "><strong>Category Lists</strong></h1>
    <hr>
    <table class="table table-scriped table-hover">
        <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Subcategory Count</th>
                <th scope="col">Product Count</th>
                <th scope="col">Action</th>
            </tr>
         </thead>
            <tbody>
                @foreach ($categories as $key=>$value )
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->slug}}</td>
                    <td>{{$value->subcategory_count}}</td>
                    <td>{{$value->product_count}}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{route('category.view',$value->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('category.edit',$value->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{route('category.destroy',$value->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
                 
                        
            </tbody>
    </table>         
</div>

@endsection