@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div class="card">
                <div class="card-header text-center"><strong>Category Create Form</strong></div>
                <div class="card-body">

                @if(Session::has('message'))
                 <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif

                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="" class="form-label">Descriptions</label>
                        <textarea name="descripiton" class="form-control @error('description') is-invalid @enderror" placeholder="write your description"  value="{{old('descripiton')}}">
                        </textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                   

                    <div class="mb-3">
                        <label for="" class="form-label">Choose Your File</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>

                    

                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection