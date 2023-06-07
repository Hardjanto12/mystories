@extends('components.layout')

@section('content')
    <h1 class="text-4xl text-black">{{ $data->title }}</h1>
    <p class="text-gray-900 mt-4">{{ $data->content }}</p>
@endsection
