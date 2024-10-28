<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    // table column field names
    protected $guarded = [];
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'due_date'
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

 
