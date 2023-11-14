@extends('layouts.main')
@section('title', 'Diamond Dogs')
@section('content')
    <h1>Algum título</h1>
    <img id="banner-img" src="/img/banner.jpg" alt="">

    @foreach ($events as $event)
        <p>{{ $event->title }}</p>
    @endforeach
@endsection
