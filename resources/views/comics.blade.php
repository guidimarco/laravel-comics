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
                <!-- top: title && descript -->
                <div class="comics-info-top">
                    <div class="small-container">
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
                        <aside class="adv">
                            <img src="{{ asset('/images/adv.jpg') }}" alt="advertise img">
                        </aside>
                    </div><!-- end small-container -->
                </div><!-- end comics info top -->

                <!-- btm: specification -->
                <div class="comics-info-btm">
                    <div class="small-container">
                        <!-- specification -->
                        <div class="comics-spec">
                            <ul>
                                <!-- sx: submenu (writer, author) -->
                                <li class="submenu-item">
                                    <h2>Talent</h2>
                                    <ul class="submenu-list">
                                        <li>
                                            <span class="submenu-name">
                                                Art by:
                                            </span>
                                            <span>
                                                @foreach ($current_comics['artists'] as $artist)
                                                    <a href="#">
                                                        {{ $artist }}
                                                    </a>{{ $loop -> last ? '' : ','}}
                                                @endforeach
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                Written by:
                                            </span>
                                            <span>
                                                @foreach ($current_comics['writers'] as $writer)
                                                    <a href="#">
                                                        {{ $writer }}
                                                    </a>{{ $loop -> last ? '' : ','}}
                                                @endforeach
                                            </span>
                                        </li>
                                    </ul>
                                </li>

                                <!-- dx: submenu other info -->
                                <li class="submenu-item">
                                    <h2>Specs</h2>
                                    <ul class="submenu-list">
                                        <li>
                                            <span class="submenu-name">
                                                Series:
                                            </span>
                                            <span>
                                                <a href="#">
                                                    {{ $current_comics['series'] }}
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                U.S. Price:
                                            </span>
                                            <span>
                                                {{ $current_comics['price'] }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                On Sale Date:
                                            </span>
                                            <span>
                                                {{ date_format(date_create_from_format('Y-m-d', $current_comics['sale_date']), 'd-m-Y') }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                Volume/Issue #:
                                            </span>
                                            <span>
                                                1
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                Trim Size:
                                            </span>
                                            <span>
                                                6 5/8 x 10 3/16
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                Page Count:
                                            </span>
                                            <span>
                                                32
                                            </span>
                                        </li>
                                        <li>
                                            <span class="submenu-name">
                                                Rated:
                                            </span>
                                            <span>
                                                Mature
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- btm: dc nav product && service -->
                        <nav class="nav-services">
                            <ul>
                                <li class="service-card">
                                    <span>Digital comics</span>
                                    <div class="logo"></div>
                                </li>
                                <li class="service-card">
                                    <span>Shop DC</span>
                                    <div class="logo"></div>
                                </li>
                                <li class="service-card">
                                    <span>Comic shop locator</span>
                                    <div class="logo"></div>
                                </li>
                                <li class="service-card">
                                    <span>Subscriptions</span>
                                    <div class="logo"></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
