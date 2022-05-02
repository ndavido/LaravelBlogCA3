@extends('layouts.app')

@section('content')
    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

        <div id="profile"
            class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


            <div class="p-4 md:p-12 text-center lg:text-left">
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
                    style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>

                <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $post->title }}</h1>
                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><span
                        class="font-bold  italic text-gray-800">By {{ $post->user->name }}</span>, Created on
                    {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                <p class="pt-8 text-sm">{{ $post->description }}</p>

            </div>

        </div>

        <div class="w-full lg:w-2/5">
            <img src="{{ asset('images/' . $post->image_path) }}"
                class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
        </div>
    </div>

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
