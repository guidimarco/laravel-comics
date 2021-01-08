@extends('layouts.app')

@section('main-content')
    <main>
        @include('partials.jumbotron')

        <section id="error-msg">
            <div class="container">
                <h1>
                    Error:404
                </h1>

                <p>Il contenuto che cerchi non è stato trovato.</p>

                <a href="{{ route('home') }}" class="btn btn-primary">
                    Torna alla homepage
                </a>
            </div>
        </section>
    </main>
@endsection
