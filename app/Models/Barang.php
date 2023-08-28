<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table="barang";
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
}

