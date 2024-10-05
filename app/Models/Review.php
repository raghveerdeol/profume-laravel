<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'username',
        'e-mail',
        'review',
        'profume_id'
    ];

    public function profume()
    {
        return $this->belongsTo(Profume::class);
    }
}
