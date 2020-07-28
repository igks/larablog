@extends('layouts.app')

@section('content')
<h1 class="text-center">{{ $title }}</h1>
<hr>
@if(count($services) > 0)
    @foreach($services as $service)
        <ul>
            <li>{{ $service }}</li>
        </ul>
    @endforeach
@endif
@endsection
