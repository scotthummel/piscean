@extends('layouts.master')

@section('title', 'Portfolio | ' . $site->site_name)

@section('content')

    <h2>Portfolio: {{ $site->site_name }}</h2>

    <h1>{{ $site->site_name }} &bull; {{ $site->dates_employed }}</h1>

    <div class="row">

        <div class="col-sm-8">

            <img class="img-responsive img-thumbnail screenshot" src="{{ '/images/screenshots/' . $site->site_image }}" alt="{{ $site->site_name }}" />

        </div>

        <div class="col-sm-4">

            <h3>Technologies: {{ $site->technologies }}</h3>

            {!! $site->description !!}

        </div>

        </div>
    </div>

@stop