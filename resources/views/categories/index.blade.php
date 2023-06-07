@extends('components.layout')

@section('content')
    <div class="grid grid-cols-3 gap-3 justify-items-center">
        @foreach ($data as $category)
            <a href="/category/{{ $category->id }}">
                <div
                    class="min-w-md mx-auto bg-slate-400 shadow-lg rounded-3xl overflow-hidden text-center w-80 h-80 transition ease-out delay-100 hover:translate-y-1 hover:scale-110 relative">
                    <div class="bg-slate-950 text-white absolute w-80
                mt-36">
                        <p class="">{{ $category->name }}</p>
                    </div>
                    <img class="rounded-t-lg" src="https://source.unsplash.com/500x500/?{{ $category->name }}">
                </div>
            </a>
        @endforeach
    </div>
@endsection
