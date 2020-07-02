<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="product";
    protected $primaryKey="id";

    public function files()
    {
        return $this->hasMany('App/Files');
    }

    public function type()
    {
        return $this->hasOne("App/Type");
    }
}
