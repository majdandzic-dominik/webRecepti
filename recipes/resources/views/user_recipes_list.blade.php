@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-primary mb-3" href="{{ route('recipes.index') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
    </svg>
    Go back
  </a>
    <h1 class="mb-4">My recipes</h1>
    <a class="btn btn-primary mb-3" href="{{ route('recipes.add') }}">Create</a>
  @foreach($recipes->chunk(4) as $chunk)
    <div class="row mb-5">
      @foreach($chunk as $recipe)
        <div class="col-md-3 p-3 shadow rounded text-truncate-container">
          <h3  class="mb-2 text-center text-uppercase text-truncate">{{ $recipe->title }}</h3>
          <div class="mb-2 text-truncate">{{ $recipe->description }}</div>
          <div class="mb-2 text-truncate">Recipe by: {{ $recipe->user->name }}</div>
          <div class="mb-2 text-truncate">Likes: {{ $recipe->likes }}</div>
          <a class="btn btn-success mb-2" href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>
          <form action="{{ route('recipes.edit', $recipe->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
        @endforeach
    </div>
  @endforeach
  </div>
@endsection