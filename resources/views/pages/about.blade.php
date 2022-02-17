@extends('base')

@section('title', 'About Me | ' . config('app.name') )

@section('content')
<img src="{{ asset('images/sk.png') }}" alt="Sk logo">
    <p>On apprend avec TeacherDuNet &hearts;</p>
        
    <p><a href="/"> Revenir à la page d'accueil </a></p> 
@endsection