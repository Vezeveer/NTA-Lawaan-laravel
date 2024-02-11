<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function scopeFilter1($query, array $filters){
        // look up in db (obviously these are not your variables. So set them yourself)
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        // search in db
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%', request('search') . '%')
                ->orWhere('tags', 'like', '%', request('search') . '%');
        }
    }
}
