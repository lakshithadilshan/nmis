<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alluser extends Model
{
    use HasFactory;
    public function employees(){
        return $this->belongsTo(Employee::class,'emp_id','emp_id');
    }
}
