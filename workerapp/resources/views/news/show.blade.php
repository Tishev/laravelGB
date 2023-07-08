@extends('layouts.main')
@section('title') Список новостей "{{ $newsItem['title'] }}" @parent @stop

@section('content')

    <div style="border: 1px solid green;">
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['author'] }}- {{ $newsItem['created_at'] }}</p>
        <p>{!! $newsItem['description'] !!}/p>
    </div>

@endsection