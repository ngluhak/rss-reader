<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    use HasFactory;

    public $fillable = ['source','title', 'creator', 'content', 'published', 'summary'];

    //inner join
    public function recommends(){
        return $this->hasMany(Recommends::class);
    }
}
