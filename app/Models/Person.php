<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\{Builder, Model};

class Person extends Model
{
    use HasFactory;

    protected $casts = [
        'is_favorite' => 'boolean',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function scopeSearch(Builder $query,  ?string $search): Builder
    {
        return $query->when($search,
            fn($query) => $query->where('name', 'like', '%' . $search . '%')
        );
    }
}
