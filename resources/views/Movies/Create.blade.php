@extends('layout')
@section('Main')

<h1>Create New Movie</h1>

<!-- Movie Form -->
<form action="{{ route('Movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Movie Title -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Movie Description -->
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description') }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

     <!-- Movie Genre (Dropdown) -->
     <div class="form-group">
        <label for="genre">Genre</label>
        <select name="genre" class="form-control" id="genre" required>
            <option value="" disabled selected>Select Genre</option>
            <option value=1 >Action</option>
            <option value=2 >Drama</option>
            <option value=3 >Comedy</option>
            <option value=4 >Horror</option>
            <option value=5 >Romance</option>
        </select>
        @error('genre')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Movie Release Date -->
    <div class="form-group">
        <label for="release_date">Release Date</label>
        <input type="date" name="release_date" class="form-control" id="release_date" value="{{ old('release_date') }}" required>
        @error('release_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Movie Rating -->
    <div class="form-group">
        <label for="rating">Rating (0-10)</label>
        <input type="number" name="rating" class="form-control" id="rating" value="{{ old('rating') }}" min="0" max="10" required>
        @error('rating')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Movie Duration -->
    <div class="form-group">
        <label for="duration">Duration (in minutes)</label>
        <input type="number" name="duration" class="form-control" id="duration" value="{{ old('duration') }}" min="1" required>
        @error('duration')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Movie Poster Image -->
    <div class="form-group">
        <label for="poster_image">Poster Image</label>
        <input type="file" name="poster_image" class="form-control-file" id="poster_image">
        @error('poster_image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Save Movie</button>
</form>

@endsection
