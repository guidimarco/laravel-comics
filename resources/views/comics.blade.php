@extends('layouts.app')

@section('main-content')
    <main>
        @include('partials.jumbotron')

        <section id="comics">
            <!-- top: comics cover -->
            <div class="cover">
                <div class="small-container">
                    <div class="img-container">
                        <!-- abs-span - mantain position -->
                        <span>Comic book</span>
                        <span>View gallery</span>

                        <!-- img -->
                        <img src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
                    </div>
                </div>
            </div>

            <div class="info">
                <div class="small-container">
                    <h1>{{ $current_comics['title'] }}</h1>

                </div>
            </div>
        </section>
    </main>
@endsection
