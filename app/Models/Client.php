<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'e-mail',
        'phone_number',
        'address',
        'city',
        'postal_code',
        'image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
