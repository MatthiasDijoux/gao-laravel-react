<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordinateur extends Model
{
    protected $table = 'ordinateurs';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function attributions()
    {
        return $this->hasMany(Attribution::class, 'id_ordinateur');
    }

}