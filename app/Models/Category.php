<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
