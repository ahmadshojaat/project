<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="product";

    public function files()
    {
        return $this->hasMany('App/Files');
    }

    public function type()
    {
        return $this->hasOne("App/Type");
    }
}
