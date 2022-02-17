@extends('layouts.base', ['title' => 'Hello Muslim'])

@section('title')

@section('content')
    <img class="mt-12 rounded shadow-lg h-50" src="{{ asset('https://tse1.mm.bing.net/th?id=OIP.FUp2da7mXF0l56xa6_DB9QHaEy&pid=Api&P=0&w=303&h=196') }}" alt="Mali flag">
    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Salam Malienw</h1>
        
    <p class="text-lg text-gray-800">It's currently {{ date('h:i: A') }} </p> 
@endsection

<!-- https://tse4.mm.bing.net/th?id=OIP.DclyZHGIw-LBNiFm6wLJlwHaFj&pid=Api&P=0&w=220&h=165 -->