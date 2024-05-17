<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'role_id',
        'role_name',
    ];

    public function save(array $options = [])
    {
        // Memastikan bahwa model tidak dapat disimpan jika sudah ada data
        if (!$this->exists) {
            return parent::save($options);
        }
        
        return false; // Mengembalikan false jika mencoba menyimpan perubahan pada data yang sudah ada
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
