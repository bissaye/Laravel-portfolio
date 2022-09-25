@extends('layouts/Base')


@section('content')
    <div class="presentation reveal">
        <h2 style="color:#4b5563">
            Hello, i am
        </h2>
        <h1>
            Franck<br>Bissaye
        </h1>
        <h2 class="titre">
            Software Engineer
        </h2>
    </div>

    @include('components/About')
    @include('components/Experiences')

@endsection