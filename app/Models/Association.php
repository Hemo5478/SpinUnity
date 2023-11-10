<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Ride;

class Association extends Model
{
    use HasFactory;
    protected $fillable = ['owner_id', 'name', 'localisation', 'description', 'responsable' ,'image'];

    /**
     * Get the comments for the blog post.
     */
    public function rides()
    {
        return $this->hasMany(Ride::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

}
