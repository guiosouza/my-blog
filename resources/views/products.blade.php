@extends('layouts.main')
@section('title', 'Products')
@section('content')
    <h1>Tela de produtos</h1>
    @if ($search != '')
        <p>O usuário está buscando por: {{ $search }}</p>
    @endif
@endsection
