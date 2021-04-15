<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public const PAYMENT_CARD = 'Card';
    public const PAYMENT_PAYPAL = 'Paypal';

    public const SHIPPING_EMS = 'EMS';
    public const SHIPPING_US_STANDARD = 'US Standard';

    public const PAYMENT_METHODS = [
        self::PAYMENT_CARD, self::PAYMENT_PAYPAL,
    ];

    public const SHIPPING_METHODS = [
        self::SHIPPING_EMS, self::SHIPPING_US_STANDARD,
    ];

    protected $guarded = [];

    // Accessors
    final public function getFormattedOrderIDAttribute(): string
    {
        return str_pad($this->id, 6, 0, STR_PAD_LEFT);
    }

    // Relationships
    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    final public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }

    final public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'orderitems', 'order_id', 'product_id')
            ->withPivot(
                'option_id', 'product_name', 'product_qty', 'product_weight', 'product_image', 'product_options',
                'product_price', 'product_total_price', 'status'
            )->withTimestamps();
    }

    final public function orderitems(): HasMany
    {
        return $this->hasMany(Orderitem::class);
    }
}
