<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Skills extends Model
{
    use SoftDeletes;
    protected $table ='skills';
    protected $fillable = ['name'];
}
