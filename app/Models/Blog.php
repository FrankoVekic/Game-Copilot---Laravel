<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','user_id','image'];

    public function scopeFilter($query, array $filters)
    {
      if($filters['search'] ?? false){
          $query->where('title', 'like', '%' . request()->search . '%')
          ->orWhere('description','like','%' . request()->search . '%');
      }
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
