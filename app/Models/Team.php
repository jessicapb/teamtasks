<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Team extends Model{
    protected $fillable = ['name','description','memberid'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'memberid');
    }
}
