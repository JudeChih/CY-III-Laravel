<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $primaryKey = 'departmentId';

    // 每個部門會有很多員工  所以用hasMany
    function employees() {
        return $this->hasMany(Employee::class, 'departmentId');
    }
}
