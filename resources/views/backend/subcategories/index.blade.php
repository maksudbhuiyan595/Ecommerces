@extends('backend.master')

@section('content')

<div class="container">
    <h1 class="text-center "><strong>Subcategory Lists</strong></h1>
    <hr>
    <table class="table table-scriped table-hover">
        <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Subcategory Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Subcategory Count</th>
                <th scope="col">Action</th>
            </tr>
         </thead>
            <tbody>
                @foreach ($categories as $key=>$value )
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$value->subcategory_name}}</td>
                    <td>{{$value->category->name}}</td>
                    <td>{{$value->category->subcategory_count}}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{route('subcategory.view',$value->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('subcategory.edit',$value->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
                        
            </tbody>
    </table>      

</div>

@endsection