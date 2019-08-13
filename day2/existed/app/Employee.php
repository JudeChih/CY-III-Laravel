<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'employeeId';

    // 每個員工會有一個部門  所以用hasOne
    function department() {
        return $this->hasOne(Department::class, 'departmentId');
    }
}
