@extends('layouts.app')

@section('content')
<div>
    <a href="/post" class="btn btn-default">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <img class="rounded" style="width: 100%" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
        </div>
    </div>
    <p>{{ $post->body }}</p>
    <hr>
    <small class="float-right">Posted on {{ $post->created_at }} </small>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="d-flex">
                <a href="/post/{{ $post->id }}/edit" class="btn btn-info mr-3 text-white">Edit</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>
                'pull-right'])
                !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        @endif
    @endif
</div>
@endsection
