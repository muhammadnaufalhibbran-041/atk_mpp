<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    protected $table="tenan";
    use HasFactory;

    public function tenan()
    {
        return $this->belongsTo('App\Models\tenan','tenan');
    }
}
