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

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/standings/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

<div class="table">
    <table class="w3-table-all">
        <thead>
            <tr>
                <th>Position</th>
                <th>Driver</th>
                <th>Nationality</th>
                <th>Car</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($standings as $table)
            <tr class="width=25%">
                <td>{{ $table->position }}</td>
                <td>{{ $table->driver }}</td>
                <td>{{ $table->car }}</td>
                <td>{{ $table->nationality }}</td>
                <td>{{ $table->points }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>

@endsection