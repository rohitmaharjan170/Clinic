<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareHolders extends Model
{
    protected $table = 'shareholders';
    protected $primaryKey = 'sh_id';
    protected $fillable = ['sh_member_no', 'sh_member_name', 'sh_mobile_no', 'sh_member_age', 'sh_membership_date'];
}
