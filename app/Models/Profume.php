<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profume extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'brand',
        'image',
        'sponsored',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
