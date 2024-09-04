<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function polls()
    {
        return $this->belongsTo(Poll::class);
    }
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
