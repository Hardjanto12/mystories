@extends('components.layout')

@section('title', 'Stories')

@section('content')
    <div class="grid grid-cols-3 gap-12 text-center justify-self-center">
        @foreach ($data as $story)
            <a href="/story/{{ $story->id }}" class="hover:shadow-2xl">
                <div
                    class="min-w-md mx-auto h-96 bg-white shadow-md rounded-md overflow-hidden hover:ring-offset-2 hover:ring-2 hover:ring-slate-900">
                    <img src="https://source.unsplash.com/500x500/?random" alt="Card Image" class="w-full h-48 object-cover">
                    <div class="p-4 bg-grey-300">
                        <h2 class="text-xl font-bold mb-2 text-slate-900">{{ $story->title }}</h2>
                        <p class="text-slate-700">{{ substr($story->content, 0, 150) . '...' }}</p>

                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $data->links() }}
    </div>
@endsection
