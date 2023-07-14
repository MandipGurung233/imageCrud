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
                    <h3>Edit post</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>   
        </div>

        <div class="card-body">
            <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="div">
                        <img style="width: 100px" src="{{asset($post->image)}}" alt=""/>
                    </div>
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" value="{{$post->title}}" name="title" id=""class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                       <option value="">Select</option>
                       @foreach ($categories as $category)
                       <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach   
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" col="30" rows="10" class="form-control">{{$post->description}}</textarea>
                </div>

                <div class="form-group mt-4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      
    </div>  
</div>

  
@endsection