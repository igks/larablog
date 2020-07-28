@extends('layouts.app');

@section('content')
<h1 class="text-center">Posts List</h1>
<hr>
@if(count($posts) > 0)

    @foreach($posts as $post)
        <div class="card p-3 my-2">
            <div class="row">
                <div class="col-md-4">
                    <img class="rounded" style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}"
                        alt="">
                </div>
                <div class="col-md-8">
                    <h3><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p>{{ Str::limit($post->body,300) }}</p>
                    <small class="d-block"><strong>Posted on {{ $post->created_at }}</strong>
                    </small>
                    <a class="btn btn-secondary mt-4" href="/post/{{ $post->id }}">More...</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <h4 class="text-center align-middle">No post available</h4>
@endif
@endsection
