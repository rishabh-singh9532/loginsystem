<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $table = "tasks";

    protected $fillable = ['user_id', 'task', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
