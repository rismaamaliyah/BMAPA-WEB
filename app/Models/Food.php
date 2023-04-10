<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto',
        'nama',
        'harga',
        'rasa',
        'lokasi',
        'deskripsi'
    ];

    protected $table = "food";
}
