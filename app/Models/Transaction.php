<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;


class Transaction extends Model
{
    use UuidTrait;

    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'user_id',
        'store_id',
        'total_transaction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'store_id');
    }

    public function details()
    {
        return $this->hasMany(DetailTransaction::class, 'transaction_id', 'transaction_id');
    }
}
