<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
       use SoftDeletes;
        protected $table = 'abouts';
        protected $fillable = ['name','jobtitle','number','email','address','aboutshort','aboutlong','photo','github'];
}
