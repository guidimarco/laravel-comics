@extends('layouts.app')

@section('main-content')
    <main>
        @include('partials.jumbotron')

        <h1>{{ $current_comics['title'] }}</h1>
    </main>
@endsection
