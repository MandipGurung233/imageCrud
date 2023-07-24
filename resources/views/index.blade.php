@extends('layouts.master')
@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Latest News</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning mx-1" href="{{route('posts.trashed')}}">Trashed</a>  
                </div>
            </div>
           
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <x-heading/>
                <tbody>
                    @foreach ($posts as $post)
                        <x-index.data>
                            <x-slot name="id">
                                {{$post->id}}
                            </x-slot>
                            <x-slot name="image">
                                {{$post->image}}
                            </x-slot>
                            <x-slot name="title">
                                {{$post->title}}
                            </x-slot>
                            <x-slot name="description">
                                {{$post->description}}
                            </x-slot>
                            <x-slot name="category">
                                {{$post->category->name}}
                            </x-slot>
                            <x-slot name="creation">
                                {{$post->created_at}}
                            </x-slot>
                        </x-index.data>
                    @endforeach              
                </tbody>  
            </table>
            {{$posts->links()}}
        </div>  
    </div>  
</div>
  
@endsection