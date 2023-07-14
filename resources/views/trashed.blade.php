@extends('layouts.master')
@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Trashed page</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.index')}}">Back</a>  
                </div>
            </div>
           
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead style="background: wheat">
                  <tr>
                    <th scope="col">S.N</th>
                    <th scope="col" style="width: 10%">Image</th>
                    <th scope="col" style="width: 10%">Title</th>
                    <th scope="col" style="width: 30%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>
                                <img src="{{asset($post->image)}}" alt="" width="80">
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary mx-1" href="{{route('posts.restore',$post->id)}}">Restore</a>
                                    <form action="{{route('posts.force_delete', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-sm btn-danger btn mx-1">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>  
    </div>  
</div>
  
@endsection