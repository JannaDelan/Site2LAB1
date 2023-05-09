<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model{

    protected $table = 'employee';
    protected $fillable = [
        'employee_firstname', 'employee_lastname'
    ];

    public $timestamps = false;
    protected $primaryKey = 'id';
}