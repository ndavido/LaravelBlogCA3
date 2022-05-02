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
        <div class="px-6 pt-20 h-full text-gray-800">
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                    <div class="grow-0 shrink-1 pl-80 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                        <label>
                            <span
                                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                                Select a file
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">


                        <div class="flex flex-row items-center justify-center lg:justify-start">
                            <p class="text-lg mb-4 mr-4">Create a Post</p>
                        </div>

                        <!-- Title input -->
                        <div class="mb-6">
                            <label for="text" name="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Title') }}:
                            </label>

                            <input type="text" name="title" placeholder="Title..." class="form-input w-full">
                        </div>

                        <!-- Descirption input -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Description') }}:
                            </label>
                            <textarea name="description" placeholder="Description..."
                                class="form-control block w-full px-4 pt-2 pb-20 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Create Post') }}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
