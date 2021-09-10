<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Department extends Model
{
    use HasFactory;
    use SoftDelete;


    protected $fillable = [
        'user_id',
        'deparment_name'
    ];


}
