@extends('layouts.sidebar')

@section('content')
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        replaceClass('categorie');
    </script>
    <div class="container">
        <h2>Categories</h2>
    </div>
@endsection
