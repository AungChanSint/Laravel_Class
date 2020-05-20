<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = ['name', 'ingredients', 'category', 'user_id'];

    public function categories() {
        return $this->belongsTo(Category::class, 'category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
