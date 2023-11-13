<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location'];
    protected $casts = [
        'date' => 'date'
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}