<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class recettes extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'type',
        'time',
        'recipe'
    ];

    public $timestamps = false;
}
