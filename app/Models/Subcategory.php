<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    /* Definir los campos que queremos que no se llenen */

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos

    public function products(){
        return $this->hasMany(Product::class);
    }

    //Relación uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
