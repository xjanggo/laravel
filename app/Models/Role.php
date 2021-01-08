<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name'];

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
