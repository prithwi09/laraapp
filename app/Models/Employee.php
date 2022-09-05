<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    //use HasFactory;
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $table = 'employees';
    protected $fillable = [
        'name','age','email'
    ];
    protected $casts = [
        //'active' => 'bool',
        

    ];
    
}    
