@extends('layouts.main')

@section('title','Update Post')

@section('content')
    <form action="{{  route('posts.update',['post' => $post->id])  }}" method="POST">
        @CSRF
        @method('PUT')
        @include('partials.form')
        <div><input type="submit"value="Update" class ="btn btn-primary btn-block"></div>
    </form>
@endsection