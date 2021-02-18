<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class village extends Model
{
    protected $table = 'villages';

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
