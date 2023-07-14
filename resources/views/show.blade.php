@extends('layouts.master')
@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Show Post</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.index')}}">Back</a> 
                </div>
            </div>
           
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <tbody>        
                    <tr>
                        <td>ID</td>
                        <td>{{$post->id}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{asset($post->image)}}" alt="" width="80"></td>
                    </tr>           
                    <tr>
                        <td>Title</td>
                        <td>{{$post->title}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$post->description}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$post->category->name}}</td>
                    </tr>
                    <tr>
                        <td>Publish Date</td>
                        <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                    </tr>  
                </tbody>
            </table>
        </div>  
    </div>  
</div>
@endsection