<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'title', 'type', 'description', 'price_display', 'promotion_price', 'price', 'afterTaxPrice', 'afterTaxPriceDisplay', 'stock', 'note'];

    protected $arr = [
        'fridge' => [
            'api' => '08030000',
            'type' => 1
        ]
    ];
}
