@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center"><strong>Category Information</strong></div>
                <div class="card-body">
                    <li>Name: {{$categories->name}}</li>
                    <li>Slug: {{$categories->slug}}</li>
                    <li>Subcategory Count: {{$categories->subcategory_count}}</li>
                    <li>Product Count: {{$categories->product_count}}</li>
                </div>
            </div>
        </div>
    </div>
   
         
</div>
@endsection