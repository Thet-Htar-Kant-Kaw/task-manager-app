<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    // table column field names
    // protected $guarded = [];
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'due_date',
        'user_id'
    ];
}

?>
