
@extends('layouts.main')
@section('container')
    <div class="posts">
      @foreach ($posts as $post)
          <article>
            <h2>
              <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
          </article>
      @endforeach
    </div>
@endsection
