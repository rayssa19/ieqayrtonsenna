<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['cell','name','viceleader','host','secretary'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'lider';
}
