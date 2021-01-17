<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Attribution extends Pivot
{
    protected $table = 'attributions';
    protected $fillable = ['id', 'horaire', 'date', 'id_ordinateur', 'id_client'];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function ordinateur()
    {
        return $this->belongsTo(Ordinateur::class, 'id_ordinateur');
    }
}
