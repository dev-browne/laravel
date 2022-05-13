@extends('layouts.main')

@section('title','Store Post')

@section('content')
    <form action="{{  route('posts.store')  }}" method="POST">
        @CSRF
        @include('partials.form')
        <div><input type="submit"value="Create" class ="btn btn-primary btn-block"></div>
    </form>
@endsection