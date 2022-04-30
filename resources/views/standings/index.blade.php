@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Standings 
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Driver
                </th>
                <th scope="col" class="px-6 py-3">
                    Nationality
                </th>
                <th scope="col" class="px-6 py-3">
                    Car
                </th>
                <th scope="col" class="px-6 py-3">
                    Points
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($standings as $table)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $table->position }}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $table->driver }}
                </td>
                <td class="px-6 py-4">
                    {{ $table->car }}
                </td>
                <td class="px-6 py-4">
                    {{ $table->nationality }}
                </td>
                <td class="px-6 py-4">
                    {{ $table->points }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection