@extends('layouts.sidebar')

@section('content')
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        replaceClass('article');
    </script>
    <div class="container">
        <h2>article</h2>
    </div>
@endsection
