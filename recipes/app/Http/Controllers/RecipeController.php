<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    public function __construct() 
    {
      $this->middleware('auth');
    }

    public function list()
    {
      $user = User::findOrFail(Auth::id());

      $recipes = Recipe::where('user_id', Auth::user()->id)->orderByDesc('created_at')->get();

      return view('user_recipes_list', compact('recipes'));
    }

    public function create()
    {
      return view('create_recipe');
    }

    public function store()
    {
      $user = User::findOrFail(Auth::id());
      $user_id = $user->id;
      $title = request('title');
      $description = request('description');
      $recipe = new Recipe();
      $recipe->user_id = $user_id;
      $recipe->title = $title;
      $recipe->description = $description;
      $recipe->save();

  
      return redirect(route('recipes.list'));
    }

    public function edit(Recipe $recipe)
    {

      return view('edit_recipe', compact('recipe'));
    }

    public function update(Recipe $recipe)
    {
      
      $title = request('title');
      $description = request('description');

      $recipe->title = $title;
      $recipe->description = $description;
      
      $recipe->save();

      return redirect(route('recipes.list'));
    }

    public function destroy(Recipe $recipe)
    {
      $recipe->delete();
      return redirect(route('recipes.list'));
    }

    public function like(Recipe $recipe){
      $user = User::findOrFail(Auth::id()); //or use auth()->user(); if it's the authenticated user

      if ($recipe->votedUsers()->where('user_id', $user->id)->exists()) 
      {
        $is_like = $recipe->votedUsers()->where('user_id', $user->id)->first()->pivot->is_like;
      }
      else
      {
        $recipe->votedUsers()->attach($user->id);
        $is_like = 0;
      }

      if($is_like)
      {
        $recipe->votedUsers()->syncWithPivotValues([$user->id], ['is_like'=> 0]);
        $recipe->likes -= 1;
        $recipe->save();
      }
      else
      {
        $recipe->votedUsers()->syncWithPivotValues([$user->id], ['is_like'=> 1]);
        $recipe->likes += 1;
        $recipe->save();
      }

      return redirect()->back();
  }
  

}