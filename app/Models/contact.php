<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   

class contact extends Model
{
    use SoftDeletes;
    protected $table ='contacts';
    protected $fillable = ['name','email','message'];
}
