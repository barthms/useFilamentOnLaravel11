<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'name');
    }
}
