<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public function sub_categories()
    {
        return $this->hasMany('\App\Category');
    }
}
