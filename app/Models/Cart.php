<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;


class Cart extends Model
{
    use UuidTrait;

    protected $primaryKey = 'cart_id';

    protected $fillable = [
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function getTotalPrice()
    {
        // Calculate total price of items in cart
        if ($this->product) {
            return $this->product->product_price * $this->quantity;
        }
        return 0; // Return 0 if product is not available
    }

    // Validation rules (optional)
    public static function rules()
    {
        return [
            'product_id' => 'required|exists:products,product_id',
            'quantity' => 'required|integer|min:1',
        ];
    }
}
