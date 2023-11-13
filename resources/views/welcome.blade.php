@extends('layouts.main')
@section('title', 'Diamond Dogs')
@section('content')
    <h1>Algum título</h1>
    <img id="banner-img" src="/img/banner.jpg" alt="">
    @if (10 > 11)
        <p>A condição é true</p>
    @endif
    <p>{{ $nome }}</p>

    @for ($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }}</p>
    @endfor
@endsection
