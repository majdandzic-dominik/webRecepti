@extends('layouts.app')

@section('content')
  <div class="container">
    @auth
    <a class="btn btn-primary mb-3" href="{{ route('recipes.list') }}">My recipes</a>
    @endauth 
    <h1 class="mb-4">All recipes</h1>
    <form class="mb-4" action="{{ route('recipes.search') }}" method="POST">
      @csrf
      <input type="text" id="search_term" name="search_term">
      <input type="submit" value="Search" type="button" class="btn btn-secondary">
    </form>
    <div class="d-flex mb-3">
      <h4 class="m-1">Sort by:</h4>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 1]) }}">A-Z</a>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 2]) }}">Z-A</a>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 3]) }}">New-Old</a>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 4]) }}">Old-New</a>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 5]) }}">Likes(High-Low)</a>
      <a class="m-1" href="{{ route('recipes.sort', ['sort' => 6]) }}">Likes(Low-High)</a>
    </div>
  @foreach($recipes->chunk(4) as $chunk)
    <div class="row mb-5">
      @foreach($chunk as $recipe)
        <div class="col-md-3 p-3 shadow rounded text-truncate-container">
          <h3  class="text-center text-uppercase text-truncate">{{ $recipe->title }}</h3>
          <div class="text-truncate">{{ $recipe->description }}</div>
          <div class="text-truncate">Recipe by: {{ $recipe->user->name }}</div>
          <div class="text-truncate">Likes: {{ $recipe->likes }}</div>
          <a href="{{ route('recipes.show', $recipe->id) }}">Show more</a><br><br>
        </div>
        @endforeach
    </div>
  @endforeach
  </div>

@endsection