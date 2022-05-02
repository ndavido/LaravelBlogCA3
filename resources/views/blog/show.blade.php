@extends('layouts.app')

@section('content')
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="w-100 pl-40"
                        alt="Sample image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">

                    <!-- Title input -->
                    <div class="mb-6">
                        <h1 class="w-full text-4xl">{{ $post->title }}</h1>
                        <span class="underline pt-4 text-gray-500">
                            By <span class="font-bold  italic text-gray-800">{{ $post->user->name }}</span>, Created on
                            {{ date('jS M Y', strtotime($post->updated_at)) }}
                        </span>
                    </div>

                    <!-- Descirption input -->
                    <div class="mb-6">
                        <p
                            class=" w-full">
                            {{ $post->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="mt-6 text-4xl leading-10 pt-4 tracking-tight font-bold text-gray-900 text-center">Comments</h2>
    @if (Auth::check())
        <div class="flex mx-auto items-center justify-center shadow-lg pt-2 mt-5 mx-8 mb-4 max-w-lg">
            <form action="/posts/{{ $post->id }}/comments" method="POST"
                class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                @csrf
                <label for="author" class="text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" placeholder="Enter your name..."
                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                    value="{{ old('author') }}" required>

                <label for="author" class="mt-6 block text-sm font-medium text-gray-700">Comment</label>
                <textarea name="text" placeholder="Add your comment..."
                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white""
                required>{{ old('text') }}</textarea>

                @if ($errors->any())
                    <div class="mt-6">
                        <ul class="bg-red-100 px-4 py-5 roundend-md">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="w-full md:w-full flex items-start md:w-full px-3">
                    <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                    </div>
                    <div class="-mr-1">
                        <input type='submit'
                            class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                            value='Post Comment'>
                    </div>
                </div>
            </form>
        </div>
    @endif

    <div class="mt-6">
        @foreach ($comments as $comment)
            <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md">
                <div class="flex">
                    {{-- Avatar --}}
                    <div class="mr-3 flex flex-col justify-center">
                        <div>
                            <?php
                            $parts = explode(' ', $comment->author);
                            $initials = strtoupper($parts[0][0] . $parts[count($parts) - 1][0]);
                            ?>
                            <span class="bg-gray-300 p-3 rounded-full">{{ $initials }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="mr-2 font-bold">{{ $comment->author }}</p>
                        <p class="text-gray-600">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                <div class="mt-3">
                    <p>{{ $comment->text }}</p>
                </div>

                <form action="/comments/{{ $comment->id }}" method="POST" class="mb-0 mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-sm py-1 px-2 border border-gray-400 shadow-sm rounded-md hover:shadow-md">Delete</button>
                </form>
            </div>
        @endforeach

        {{ $comments->links() }}
    </div>
@endsection
