<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'quantity',
    ];

    public function profume()
    {
        return $this->belongsToMany(Profume::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
