@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="https://www.hcpc-uk.org/globalassets/image-library/icons/icon-register-800x600.gif"
                        class="w-full" alt="Sample image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-row items-center justify-center lg:justify-start">
                            <p class="text-lg mb-4 mr-4">Register</p>
                        </div>

                        <!-- Title input -->
                        <div class="mb-6">
                            <label for="text" name="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Title') }}:
                            </label>

                            <input type="text" name="title" value="{{ $post->title }}" class="form-input w-full">
                        </div>

                        <!-- Descirption input -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Description') }}:
                            </label>
                            <textarea name="description" placeholder="Description..."
                                class="form-control block w-full px-4 pt-2 pb-20 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">{{ $post->description }}</textarea>
                        </div>

                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Update Post') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
