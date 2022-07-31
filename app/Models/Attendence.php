<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    protected $fillable = ['emp_id','fname','arrival_time','leave_time','status'];

    public function employees(){
        return $this->belongsTo(Employee::class,'emp_id','emp_id');
    }
}
