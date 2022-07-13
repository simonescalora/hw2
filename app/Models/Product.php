<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; //collega il modello alla tabella MySQL dei prodotti
    protected $primaryKey = 'id';
    public $incrementing = true; //x auto_increment
    protected $fillable = ['name', 'description', 'price', 'image']; //campi da prendere in considerazione
    public $timestamps = false; //x created_at e updated_at
}
