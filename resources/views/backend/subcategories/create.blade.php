@extends('backend.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div class="card">
                <div class="card-header text-center"><strong>Subcategory Create Form</strong></div>
                <div class="card-body">

                @if(Session::has('message'))
                 <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif

                <form action="{{route('subcategory.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Subcategory Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"  placeholder="subcategory name" value="{{old('name')}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>

                    

                    <div class="mb-3">
                        <label for="" class="form-label">Category Name</label>
                        <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror" value="{{old('category_id')}}">
                           @foreach($categories as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                        </select>

                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection