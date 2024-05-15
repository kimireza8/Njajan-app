<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id'; // Definisikan primary key sesuai kebutuhan

    protected $fillable = [
        'user_id',
        'role_id',
        'user_name',
        'email',
        'password',
    ];

    // Definisikan relasi dengan model lain jika diperlukan
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
