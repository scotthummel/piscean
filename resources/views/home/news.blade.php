@extends('layouts.master')

@section('title', 'News')

@section('content')

    <h2>News</h2>

    <h1>News from Piscean Digital</h1>

    @foreach ($articles as $article)

        <div class="well">
            <h3>{{ $article->title }}</h3>

            {!! $article->body !!}

            <div class="pull-right">
                &mdash; Posted {{ $article->created_at->diffForHumans() }}
            </div>

            <br />

        </div>

    @endforeach

@stop
