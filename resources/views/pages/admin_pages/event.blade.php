@extends('layouts.sidebar')

@section('content')
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        replaceClass('event');
    </script>
    <div class="container">
        <h2>event</h2>
    </div>
@endsection
