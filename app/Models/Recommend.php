<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;

    //inner join
    public function user(){
        return $this->belongsTo(User::class);
    }
}
