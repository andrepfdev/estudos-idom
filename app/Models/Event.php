<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'date',
        'location',
        'capacity',
        'status',
    ];
    
    protected $casts = [
        'date' => 'datetime',
        'capacity' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
