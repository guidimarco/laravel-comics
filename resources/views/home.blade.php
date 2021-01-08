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
                    @foreach ($comics as $key => $current_comics)
                        <!-- single comics card -->
                        <div class="comics-card">
                            <a href="{{ route('comics', ['id' => $key]) }}">
                                <img src="{{ $current_comics['thumb'] }}" alt="comics {{ $current_comics['title'] }}">
                                <h3>{{ $current_comics['series'] }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- btn -> load more -->
                <div class="btn-container">
                    <a href="#" class="btn btn-primary">Load more</a>
                </div>
            </div>
        </section>

        <section id="info-nav" class="sec-primary">
            <div class="container">
                <nav class="info-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="images/buy-comics-digital-comics.png" alt="logo digital comics">
                                <span>Digital comics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/buy-comics-merchandise.png" alt="logo DC merchandise">
                                <span>DC Merchandise</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/buy-comics-subscriptions.png" alt="logo subscriptions">
                                <span>Subscription</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/buy-comics-shop-locator.png" alt="logo DC shop">
                                <span>Comics Shop Locator</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/buy-dc-power-visa.svg" alt="logo power visa">
                                <span>DC Power Visa</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
@endsection
