<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
/* 
    protected $fillable = ['seller_id']; */

    public function user()
    {
        return $this->hasOne(User::class,'id','seller_id');
    }
}
