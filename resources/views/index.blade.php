@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Your area for weekly F1 Updates and Discussions!
                </h1>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.formula1.com/content/dam/fom-website/sutton/2019/Spain/Saturday/1017496519-LAT-20190512-_1ST3493.jpg"
                width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Were you looking for a way to stay up to date with the current F1 season?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                This might just be the forum you were looking for!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Catch up on missed qualificactions and races. Share your favourite moments with others.
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-red-700 text-white">
        <h2 class="text-2xl pb-5 text-l">
            Come back weekly for :
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Updates in standings
        </span>
        <span class="font-extrabold block text-4xl py-1">
            New posts regarding races
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Updates on teams
        </span>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.scotsman.com/webimg/b25lY21zOjZjYTYyNGViLTM4ZTUtNGJhYy05Zjc0LTM2YTIwMmNhYzg1Njo1ODc2ZjgwOS01YmIxLTQ5NzAtOTA5NC1iYmY3NDdhNTJiNGI=.jpg?width=2048&enable=upscale"
                width="700" alt="">       
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Dont know the current standings?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Standing are updated after every race!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                View a table which tell you which team is in the lead, and which driver are doing the most work.
            </p>

            <a href="/standings" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

@endsection
