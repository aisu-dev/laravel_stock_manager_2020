<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $fillable = ['emp_name','emp_password','emp_address','emp_phone','emp_dob','pos_id'];
}
