<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;


    public function scopeFilter($query, array $filters)
{
    if($filters['search'] ?? false){
        $query->where('headline', 'like', '%' . request()->search . '%')
        ->orWhere('article','like','%' . request()->search . '%');
    }
  }

  public function user()
  {
    return $this->belongsTo(User::class,'user_id','id');
  }
}
