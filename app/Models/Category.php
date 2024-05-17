<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_id',
        'category_name',
    ];

    public function save(array $options = [])
    {
        // Memastikan bahwa model tidak dapat disimpan jika sudah ada data
        if (!$this->exists) {
            return parent::save($options);
        }
        
        return false; // Mengembalikan false jika mencoba menyimpan perubahan pada data yang sudah ada
    }
    
    public function products()
    {
        return $this->hasMany(Product::class, 'product_category', 'category_id');
    }
}
