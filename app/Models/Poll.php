<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poll extends Model
{
    use HasFactory;
protected $fillable = ['title', 'category_id'];
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    // public function getStartDateAttribute()
    // {
    //     return $this->start_at->format('M d, Y');
    // }

    // public function getStartTimeAttribute()
    // {
    //     return $this->start_at->format('h:i A');
    // }

    // public function getEndDateAttribute()
    // {
    //     return $this->end_at->format('M d, Y');
    // }

    // public function getEndTimeAttribute()
    // {
    //     return $this->end_at->format('h:i A');
    // }

    // public function getEndDateFormatAttribute()
    // {
    //     return $this->end_at->diffForHumans();
    // }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
