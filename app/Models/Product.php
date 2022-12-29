<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'image_path',
        'image_name',
        'amount',
        'price',
        'description',
        'status',
        'id_unit',
        'id_trademark',
        'id_cate',
        'id_suppli',
    ];
}
