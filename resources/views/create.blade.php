@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}    
            </div>                
        @endforeach
    @endif
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Create News</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>
           
        </div>
        
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input name="title" type="text" id=""class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" col="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group mt-4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      
    </div>  
</div>

  
@endsection