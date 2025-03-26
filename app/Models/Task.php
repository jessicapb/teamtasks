<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
class Task extends Model
{
    use HasFactory; 
    protected $fillable = ['name','description', 'teamid', 'start_date', 'due_date', 'status'];

    public function team()
    {
        return $this->belongsTo(Team::class, 'teamid');
    }
}
