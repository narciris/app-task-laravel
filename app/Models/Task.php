<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'is_completed',
        'user_id'
    ];

    public function casts(): array
    {
        return [
            'due_date' => 'date'
        ];

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
