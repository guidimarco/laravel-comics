@extends('layouts.app')

@section('main-content')
    <main>
        @include('partials.jumbotron')

        <section id="series">
            <div class="container">
                <!-- title -->
                <h1>Current series</h1>

                <!-- container of comics -->
                <div class="comics-container">
                    @foreach ($comics as $current_comics)
                        <!-- single comics card -->
                        <div class="comics-card">
                            <img src="{{ $current_comics['thumb'] }}" alt="comics {{ $current_comics['title'] }}">
                            <h3>{{ $current_comics['series'] }}</h3>
                        </div>
                    @endforeach
                </div>

                <!-- btn -> load more -->
                <div class="btn-container">
                    <a href="#" class="btn btn-primary">Load more</a>
                </div>
            </div>
        </section>
    </main>
@endsection
