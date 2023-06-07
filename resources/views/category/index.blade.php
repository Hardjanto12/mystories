@extends('components.layout')

@section('content')
    @foreach ($data as $stories)
        <p>{{ $stories->title }}</p>
    @endforeach
@endsection
