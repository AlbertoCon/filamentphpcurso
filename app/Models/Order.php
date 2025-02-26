<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'custom_id',
        'number',
        'total_price',
        'status',
        'shipping_price',
        'notes',
    ];

    public function custom(): BelongsTo
    {
        return $this->belongsTo(Custom::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
