<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function cat_belong_to_sub()
    {
        return $this->belongsTo('\App\Subjects');
    }
}
