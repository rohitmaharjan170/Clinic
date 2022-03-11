<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
     protected $table = 'members';
    protected $primaryKey = 'mem_id';
    protected $fillable = ['mem_name', 'mem_phone','mem_address', 'mem_post', 'mem_img','mem_dept_id'];
}
