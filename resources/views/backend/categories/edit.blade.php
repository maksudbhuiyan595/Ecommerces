@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div class="card">
                <div class="card-header text-center"><strong>Category Edit Form</strong></div>
                <div class="card-body">

                <form action="{{route('category.update',$categories->id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"  placeholder="category name" value="{{old('name')}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>

                    

                    <div class="mb-3">
                        <label for="" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="slug" value="{{old('slug')}}">

                        @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                   

                    <div class="mb-3">
                        <label for="" class="form-label">Subcategory Count</label>
                        <input type="number" class="form-control @error('subcategory_num') is-invalid @enderror" name="subcategory_num" placeholder="subcategory number" value="{{old('subcategory_num')}}">

                        @error('subcategory_num')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Product Count</label>
                        <input type="number" class="form-control @error('product_count') is-invalid @enderror" name="product_count" placeholder="product count" value="{{old('product_count')}}">

                        @error('product_count')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection