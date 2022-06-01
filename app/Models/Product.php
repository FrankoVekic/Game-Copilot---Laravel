<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','price','quantity','description','slug','image'
    ];

public function scopeFilter($query, array $filters)
{
    if($filters['search'] ?? false){
        $query->where('title', 'like', '%' . request()->search . '%')
        ->orWhere('description','like','%' . request()->search . '%')
        ->orWhere('slug','like','%' . request()->search . '%');
    }
  }
}
