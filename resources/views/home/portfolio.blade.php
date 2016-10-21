@extends('layouts.master')

@section('title', 'Portfolio')

@section('content')

    <h2>Piscean Digital Portfolio</h2>

    <h1>Select Websites Created Since 2006</h1>

    @foreach ($sites as $site)

        <div class="well">
            <div class="row">

                <div class="col-sm-6">

                    <img class="img-responsive img-thumbnail screenshot" src="{{ '/images/screenshots/' . $site->site_image }}" alt="{{ $site->site_name }}" />

                </div>

                <div class="col-sm-6">

                    <h3>{{ $site->site_name }}</h3>

                    <h5>{{ $site->dates_employed }}</h5>

                    <p><strong>{{ $site->technologies }}</strong></p>

                    <?php
                    $description = $site->description;
                    $pattern = "/<p>(.*?)<\/p>/";
                    preg_match_all($pattern, $description, $matches);

                    if (!empty($matches[0])) {
                        echo $matches[0][0] . $matches[0][1];

                        echo '<a class="btn btn-primary pull-right" href="/portfolio/' . $site->slug . '">Read more...</a>';
                    }
                    ?>

                </div>

            </div>
        </div>

    @endforeach

@stop