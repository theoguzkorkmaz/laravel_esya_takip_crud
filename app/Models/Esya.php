<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esya extends Model
{
    use HasFactory; 

    public function birim() {
        //Birim bir modeldir.
        //birim_id esyas tablosunda esya id'sine denk gelen sütundur.
        //id birim tablosundaki birimlerin id'sine denk gelen sütundur.
        return $this->hasOne(Birim::class, 'id', 'birim_id');
    }
}
