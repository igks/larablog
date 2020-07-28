@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                    <th><a class="btn btn-warning" href="/post/{{ $post->id }}/edit">Edit</a>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no post</p>
                    @endif
                    <a href="/post/create" class="btn btn-primary mt-3">Create post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
