<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celula extends Model
{
    protected $fillable = ['nome','leader','viceleader','offers','date','start','finish','members','visitors','total','decisions','testimonials'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'celula';
}








