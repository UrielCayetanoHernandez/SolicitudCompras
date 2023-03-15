<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'productos';


    public function categori1()
    {
        return  $this->belongsTo(categoria1::class, 'cate_id1');
    }

    public function categori2()
    {
        return  $this->belongsTo(categoria2::class, 'cate_id2');
    }



}
