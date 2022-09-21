@extends('layouts.app')

@section('content')
<div class="container shadow p-4">
  <a class="btn btn-primary mb-3" href="{{ route('recipes.index') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
    </svg>
    Go back
  </a>
  <h1 class="text-center mb-4">{{ $recipe->title }}</h1>
  
  <h5>Recipe by: {{ $recipe->user->name }}</h5>
  <h4 class="text-break text-justify mb-5">{{ $recipe->description }}</h4>

  <h4 class="text-break text-justify">Likes: {{ $recipe->likes }}</h4>
  @auth
  <form action="{{ route('recipes.like', $recipe->id) }}" method="POST">
    @csrf
    <button class="btn btn-primary mb-3" type="submit">Like</button>
  </form>
  @endauth
</div>

@endsection