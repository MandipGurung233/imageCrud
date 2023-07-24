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
                <x-heading/>
                <tbody>
                    @foreach ($posts as $post)
                        <x-trashed.data :post="$post"/>
                    @endforeach
                  
                </tbody>
            </table>
        </div>  
    </div>  
</div>
  
@endsection