@extends('base')

@section('title', 'About Me | ' . config('app.name') )

@section('content')
    <img class="my-12 shadow-md" src="{{ asset('images/sk.png') }}" alt="Sk logo">
    <h2 class="text-gray-700 mb-5">
        On apprend avec TeacherDuNet <span class="text-3xl text-pink-500">&hearts;</span>
    </h2>
        
    <p>
        <a href="/" class="text-indigo-400 hover:text-indigo-600 underline"> Revenir à la page d'accueil </a>
    </p> 
@endsection