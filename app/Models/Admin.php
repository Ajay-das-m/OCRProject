<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'sheet';
    protected $primarykey='id';
    public $incrementing= true;
     protected $fillable=['user_id','name','timesheet','position','work_place','date','total_working_hours','post_code','amount'];
}
