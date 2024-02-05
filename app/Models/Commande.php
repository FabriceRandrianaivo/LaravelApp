<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'id_user',
        'id_article',
        'adress',
        'date',
        'content',
    ];
}
