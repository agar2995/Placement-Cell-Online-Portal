<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyRounds extends Model
{
    //
    protected $table = 'Company_Rounds';
    protected $fillable = ['company_id', 'round_id', 'round_name'];
    public $timestamps = false;
}
