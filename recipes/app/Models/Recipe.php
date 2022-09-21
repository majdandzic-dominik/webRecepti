<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function votedUsers(){ 
      return $this->belongsToMany(User::class, 'recipe_users')->withPivot('is_like');
  }
}
