<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function job(){

        return $this->belongsTo(Job::class);
     }

     public function employee(){

        return $this->belongsTo(User::class);
     }
}
