<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'quantity'];
    //
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
