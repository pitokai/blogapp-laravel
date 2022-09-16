@extends('layouts.main')

@section('container')
    <div class="posts">
          <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->excerpt }}</p>
            <p>{{ $post->body }}</p>
            <a href="/posts">Back</a>
          </article>
    </div>
@endsection