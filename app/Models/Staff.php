<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['email', 'fio', 'age', 'work_exp','photo','avg_salary'];


}
