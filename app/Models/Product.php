<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements CanVisit
{
    use HasFactory;
    use HasVisits;
    protected $table="products";

        public function category()
        {
            return $this->belongsTo(Category::class,'category_id');
        }

        public function orderItems()
        {
            return $this->hasMany(OrderItem::class,'product_id');
        }

        public function subcategories()
        {
            return $this->belongsTo(Subcategory::class,'subcategory_id');
        }
        public function attributeValues()
        {
            return $this->hasMany(AttributeValue::class,'product_id');
        }
    
}
