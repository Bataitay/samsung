<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'title', 'type', 'description', 'price_display', 'promotion_price', 'price', 'after_tax_price', 'after_tax_price_display', 'stock', 'note'];

    protected function stock(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => $value == 0 ? 'Hết hàng' : 'Còn hàng',
        );
    }
}
