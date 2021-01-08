@extends('layouts.app')

@section('title', strtoupper($current_comics['title']) . " | DC")

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
                    <!-- top: title && descript -->
                    <div class="comics-info-top">
                        <!-- sx: info -->
                        <div class="comics-info">
                            <h1>{{ $current_comics['title'] }}</h1>

                            <div class="comics-price">
                                <!-- sx: price info -->
                                <div class="price">
                                    <span>U.S. Price: {{ $current_comics['price'] }}</span>
                                    <span>Available</span>
                                </div>

                                <!-- dx: availability menu -->
                                <div class="availability dropdown">
                                    <span>Check availability</span>
                                </div>
                            </div>

                            <p>{{ $current_comics['description'] }}</p>

                        </div>

                        <!-- dx: advertise -->
                        <div class="adv">
                            <img src="{{ asset('/adv.jpg') }}" alt="advertise img">
                        </div>
                    </div><!-- end comics info top -->

                    <!-- btm: specification -->
                    <div class="comics-info-btm">

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
