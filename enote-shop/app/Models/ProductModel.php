<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductModel extends Model
{
    use HasFactory, Sluggable;

    /**
    * Return the sluggable configuration array for this model.
         *
         * @return array
         */

    protected $casts = [
            'product_images' => 'array',
        ];

    public function sluggable(): array
        {
            return [
                'product_slug' => [
                    'source' => ['product_title','product_article']
                ]
            ];
        }

}
