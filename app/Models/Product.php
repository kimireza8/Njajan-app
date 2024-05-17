<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;


class Product extends Model
{
    use UuidTrait;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'store_id',
        'product_category',
        'product_image',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'store_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category', 'category_id');
    }
}
