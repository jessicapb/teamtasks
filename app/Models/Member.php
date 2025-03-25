<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Member extends Model{
    protected $fillable = ['name','email'];
    // En el modelo Member
    public function teams()
    {
        return $this->hasMany(Team::class, 'memberid');
    }
}
