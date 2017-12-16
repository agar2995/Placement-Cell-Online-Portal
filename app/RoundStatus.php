<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoundStatus extends Model
{
    //
    protected $table = 'Round_Selection';
    protected $fillable = ['student_id', 'round_id', 'round_status'];
    public $timestamps = false;
}
