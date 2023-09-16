@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center"><strong>Subcategory Information</strong></div>
                <div class="card-body">
                    <li>Name: {{$subcategories->subcategory_name}}</li>
                    <li>Slug: {{$subcategories->category->name}}</li>
                    <li>Subcategory Count: {{$subcategories->category->subcategory_count}}</li>
                </div>
            </div>
        </div>
    </div>
   
         
</div>
@endsection