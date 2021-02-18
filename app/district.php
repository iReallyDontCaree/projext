<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class district extends Model
{
    protected $table = 'districts';

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
