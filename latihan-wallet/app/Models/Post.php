<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [

        'nama',
        'bank',
        'saldo',
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function nama(): Attribute
    {
        return Attribute::make(
            get: fn ($nama) => asset('/storage/posts/' . $nama),
        );
    }
}
