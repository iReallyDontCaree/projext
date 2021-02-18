<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class cell extends Model
{
    protected $table = 'cells';

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
