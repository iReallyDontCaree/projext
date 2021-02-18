<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class sector extends Model
{
    protected $table = 'sectors';

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
