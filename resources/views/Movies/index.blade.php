@extends('layout')

@section('Main')

<h1>Movies List</h1>

@foreach ($movies as $movie)
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$movie->poster_image) }}" class="card-img-top" alt="Movie Poster">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
        </div>
    </div>
@endforeach

<!-- Pagination links -->
<div class="mt-4">
    {{ $movies->links() }}
</div>

@endsection
