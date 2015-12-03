@extends('layouts.master')

@section('title', 'News')

@section('content')

    <h2>News</h2>

    <h1>News from Piscean</h1>

    @foreach ($articles as $article)

        <h3>{{ $article->title }}</h3>

        {!! $article->body !!}

        <div class="pull-right">
            &mdash; Posted {{ $article->created_at->diffForHumans() }}
        </div>

        <br />

        <hr />

    @endforeach

@stop
