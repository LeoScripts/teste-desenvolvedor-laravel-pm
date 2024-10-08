<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];

  public function product()
  {
    return $this->belongsToMany(Products::class, 'categories_products', 'category_id', 'product_id');
  }
}
