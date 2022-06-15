<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    
    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false){
            // echo 'false echo';
            $query->where('content', 'like', '%' . request('search') . '%')->orWhere('id', 'like', '%' . request('search') . '%')->orWhere('created_at', 'like', '%' . request('search') . '%');
        }
    }

}
