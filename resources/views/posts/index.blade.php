@extends('layouts.main')

@section('title','BlogPost Index')

@section('content')
@forelse($posts as $post)
<div style="background-color: lightgrey;">
<a href="{{  route('posts.show',['post'=>$post->id])  }}"><h1>{{  $post->title  }}</h1> </a>
   <p>{{  $post->content  }}</p>
</div>
<div class="mb-3">
   <a href="{{  route('posts.edit',['post'=>$post->id])  }}" class ="btn btn-primary" >Edit</a>
   <form class ="d-inline" action = "{{  route('posts.destroy',['post' => $post->id])  }}" method="POST">
        @CSRF
        @method('DELETE')
       <input type="submit" value="Delete"class ="btn btn-primary">
   </form>
</div>
@empty
No Blog Posts
@endforelse
@endsection

