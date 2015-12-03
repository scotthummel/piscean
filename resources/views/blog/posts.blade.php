@extends('layouts.master')

@section('title', 'Blog')

@section('content')

    <h2>Piscean Blog</h2>

    <div class="row">

        <div class="col-sm-3">

            <h3>Tags</h3>

            @if ($tags->count())


            @else

                <p>There are no tags.</p>

            @endif

        </div>

        <div class="col-sm-9">

            <h1>Recent Posts</h1>

            @if ($posts->count())

                @foreach ($posts as $post)

                    <h3>{{ $post->post_title }}</h3>

                    {!! $post->body !!}

                    <div class="pull-right">
                        &mdash; Posted {{ $post->created_at->diffForHumans() }}
                    </div>

                @endforeach

            @else

                <p>There are no posts available.</p>

            @endif
        </div>
    </div>

@stop
