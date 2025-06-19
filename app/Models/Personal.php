<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Personal extends Model
{
    use SoftDeletes;
    protected $table ='personals';
    protected $fillable = ['name','number','email','address','about','photo','github'];
}
