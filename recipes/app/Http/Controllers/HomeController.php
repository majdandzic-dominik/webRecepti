<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index($sort = 0)
    {

      $recipes = Recipe::orderBy('created_at', 'desc')
      ->with('user')
      ->get();
  

      return view('all_recipes_list', compact('recipes'));
    }

    public function sort($sort = 0)
    {
      switch ($sort) {
        case 1:
          $recipes = Recipe::orderBy('title', 'asc')
          ->with('user')
          ->get();
          break;
        case 2:
          $recipes = Recipe::orderBy('title', 'desc')
          ->with('user')
          ->get();
          break;
        case 3:
          $recipes = Recipe::orderBy('created_at', 'desc')
          ->with('user')
          ->get();
        break;
        case 4:
          $recipes = Recipe::orderBy('created_at', 'asc')
          ->with('user')
          ->get();
          break;
        case 5:
          $recipes = Recipe::orderBy('likes', 'desc')
          ->with('user')
          ->get();
          break;
        case 6:
          $recipes = Recipe::orderBy('likes', 'asc')
          ->with('user')
          ->get();
        break;
        default:
          $recipes = Recipe::orderBy('created_at', 'desc')
          ->with('user')
          ->get();
      }

      return view('all_recipes_list', compact('recipes'));
    }

    public function show(Recipe $recipe)
    {
      return view('show_recipe', compact('recipe'));
    }

    public function search()
    {
        $search_term = request('search_term');

        $recipes = Recipe::where('title', 'LIKE', '%'.$search_term.'%')
          ->orWhere('description', 'LIKE', '%'.$search_term.'%')  
          ->get(); 
        
  
        return view('search_results', compact('recipes'));
    }
}
