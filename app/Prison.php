<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\District;
use App\Sector;
use App\Village;
use App\cell;

class Prison extends Model
{
    protected $table = 'prisons';

    protected $guarded = [];


    public function district()
    {
        return $this->hasOn(District::class);
    }

    public function sector()
    {
        return $this->hasOn(Sector::class);
    }
    public function village()
    {
        return $this->hasOn(Village::class);
    }
    public function cell()
    {
        return $this->hasOn(Cell::class);
    }
}
