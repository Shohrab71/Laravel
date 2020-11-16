<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeCrud extends Model
{
    protected $fillable = ['name','gender','designation','district'];
}
