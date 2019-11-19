<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eclass extends Model
{
    protected $guarded = [];

    protected $table = 'eclasses';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
