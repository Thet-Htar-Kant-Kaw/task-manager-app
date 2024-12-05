<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

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

 
