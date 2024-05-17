<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable; // Import Authenticatable interface
use Illuminate\Notifications\Notifiable;
use App\Traits\UuidTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, Notifiable, UuidTrait;

    protected $primaryKey = 'user_id'; // Define the primary key as needed

    protected $fillable = [
        'user_id',
        'role_id',
        'user_name',
        'email',
        'password',
    ];

    // Define the relationship with the Role model
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    // Define the relationship with the Cart model
    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id', 'user_id');
    }

    // Define the relationship with the Transaction model
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id', 'user_id');
    }

    // Implement methods required by the Authenticatable interface

    public function getAuthIdentifierName()
    {
        return 'user_id'; // Return the name of the primary key
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Return the primary key value
    }

    public function getAuthPassword()
    {
        return $this->password; // Return the user's hashed password
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Return the user's "remember me" token
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Set the user's "remember me" token
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Return the name of the "remember me" token column
    }
}
