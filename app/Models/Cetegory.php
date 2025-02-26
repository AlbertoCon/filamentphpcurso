<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetegory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'is_visible',
        'description',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Cetegory::class, 'parent_id');
    }

    public function child(): HasMany
    {
        return $this->hasMany(Cetegory::class, 'parent_id');

    }

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class);
    }
}
