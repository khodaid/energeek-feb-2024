<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Skill extends Model
{
    use HasFactory,SoftDeletes,Userstamps;

    protected $guarded = ['id'];
}
