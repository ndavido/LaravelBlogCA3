@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
            @if (Auth::check())
                <div class="pt-15 w-4/5 m-auto">
                    <a href="/blog/create"
                        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Create post
                    </a>
                    @if (session()->has('message'))
                        <div class="w-4/5 m-auto mt-10 pl-2">
                            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                                {{ session()->get('message') }}
                            </p>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
    <div class="px-80 grid grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/' . $post->image_path) }}" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $post->title }}</h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3">Click on read me to read the post...</p>
                    <a href="/blog/{{ $post->slug }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                        href="#">
                        Read more
                    </a>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <span class="float-right">
                            <a href="/blog/{{ $post->slug }}/edit"
                                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Edit
                            </a>
                        </span>

                        <span class="float-right">
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="text-red-500 pr-3" type="submit">
                                    Delete
                                </button>

                            </form>
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
